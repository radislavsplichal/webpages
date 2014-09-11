<?php

$wuser = $_POST["usern"];
$pass = $_POST["passw"];

#echo $wuser;
#echo $pass;
include'../connection.php';




$query = sprintf("SELECT id, username, password FROM members WHERE username = '%s'", mysql_real_escape_string($wuser));

$result = mysql_query($query);


$row = mysql_fetch_assoc($result);

$pass = crypt($pass, $row['password']);
if ($row && $pass === $row['password'] )  {

    echo "Login Sucesfull";

    session_start();
    $_SESSION['username'] = $row['username'];



    mysql_close($link);
    $_SESSION['admin']=1;
    header('Location: ../index.php');
    
} else {

    echo "Login Unsuccesfull";

    mysql_close($link);
    #header('Location: ../index.php');
}


mysql_close($link);


#header('Location: ../index.php');