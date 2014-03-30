<?php
include'connection.php';
$articleId = "10 or 'b' = 'b'";
$result = sprintf("DELETE FROM Articles  WHERE ArticleID=%s",
mysql_real_escape_string($articleId)
);
echo"\n";
echo $result;
?>

