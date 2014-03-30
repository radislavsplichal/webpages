<?php

include'connection.php';


$articleId = $_GET['article'];

$query = sprintf("DELETE FROM Articles  WHERE ArticleID=%s",
mysql_real_escape_string($articleId)
);

#echo $query;
$result = mysql_query($query);

mysql_close($link);

header('Location: list.php');

?>

