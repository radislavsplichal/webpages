<?php
$comment = $_POST['komentar'];
$articleid = $_POST['articleid'];

/* Uploading process to put comments to the database*/
include 'connection.php';
session_start();
$mid = $_SESSION['uid'];
$query = sprintf("INSERT INTO comments (article_id, comment_text, cr_date, mid) VALUES ('%s','%s',NOW(),'%s')", mysql_real_escape_string($articleid), mysql_real_escape_string($comment), $mid );
echo $query;
mysql_query("start transaction;");

$result = mysql_query($query);
if (!$result) {
    die('Invalid query: ' . mysql_error());
}


mysql_query("commit;");

mysql_close($link);
header("Location: detail.php?article=$articleid");


?>