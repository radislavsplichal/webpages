<?php	
// First time setup
// Run this script, if you are installing the CMS

include("connection.php");


$query=
"CREATE TABLE `radislavsplichal`.`articles` ( `articleID` INT NOT NULL AUTO_INCREMENT , `title` VARCHAR(150) NOT NULL , `bodytext` TEXT NOT NULL , `created` VARCHAR(50) NOT NULL , `createdTIme` DATETIME NULL DEFAULT NULL , `modifiedTime` DATETIME NULL DEFAULT NULL , PRIMARY KEY (`articleID`)) ENGINE = InnoDB;";

$base->write($query);




?>