<?php
$user = "tata";
$password = "tata";


$link = mysql_connect('89.239.10.163:3306', 'tata', 'tata');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}

$db_selected = mysql_select_db('radislavsplichal', $link);
if (!$db_selected) {
    die ('Can\'t use rs : ' . mysql_error());
}
?>

