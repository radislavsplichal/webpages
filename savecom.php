<?php

$cname = $_POST["jmeno"];
$cemail = $_POST["e-mail"];
$ctext = $_POST["komentar"];

echo $cname, $cemail, $ctext;

include'connection.php';

?>