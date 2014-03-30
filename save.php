


<?php

$articlen = $_POST["articlebody"];
$title = $_POST["title"];
$topic = $_POST["selecttopic"];
$operation = $_POST["Operation"];
$article = trim($articlen);
$articleId = $_POST["OperationID"];
$file = $_FILES["fileimg"];

$title = htmlspecialchars($title);
$article = htmlspecialchars($article);


$uploads_dir = 'upload';
echo '<br><br><br>';
var_dump($_FILES);

$new_image_name = 'image_' . date('Y-m-d-H-i-s') . '_' . uniqid() . '.jpg';

if ($_FILES["fileimg"]["error"] == UPLOAD_ERR_OK) {
    $tmp_name = $_FILES["fileimg"]["tmp_name"];
    $name = $_FILES["fileimg"]["name"];
    move_uploaded_file($tmp_name, "$uploads_dir/$new_image_name");
    echo $tmp_name;
    echo $name;
} else {
    echo 'nic se nestlo';
}


include'connection.php';

mysql_query("start transaction;");

if ($operation == 'update') {
    $query = sprintf("UPDATE Articles  SET Topic='%s', Title='%s', Article='%s'   WHERE ArticleID='%s'", mysql_real_escape_string($topic), mysql_real_escape_string($title), mysql_real_escape_string($article), mysql_real_escape_string($articleId)
    );
#echo $query;   
} else {
    $query = sprintf("INSERT INTO Articles (Topic, Title, Article, IMG, IMGTemp, Date) VALUES ('%s','%s','%s','%s','%s' ,NOW())", mysql_real_escape_string($topic), mysql_real_escape_string($title), mysql_real_escape_string($article),mysql_real_escape_string($name), mysql_real_escape_string($new_image_name));
}

$result = mysql_query($query);
if (!$result) {
    die('Invalid query: ' . mysql_error());
}


mysql_query("commit;");

mysql_close($link);


header('Location: list.php');
#echo $_POST["fileimg"];
?>
 


