<?php

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
$password2 = filter_input(INPUT_POST, 'password2');

if ($password == $password2) {

    // A higher "cost" is more secure but consumes more processing power
    $cost = 10;

// Create a random salt
    $salt = strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');

// Prefix information about the hash so PHP knows how to verify it later.
// "$2a$" Means we're using the Blowfish algorithm. The following two digits are the cost parameter.
    $salt = sprintf("$2a$%02d$", $cost) . $salt;

// Value:
// $2a$10$eImiTXuWVxfM37uY4JANjQ==
// Hash the password with the salt
    $hash = crypt($password, $salt);

    include'connection.php';

    mysql_query("start transaction;");
    $query = sprintf("INSERT INTO members (username, password) VALUES ('%s','%s')", mysql_real_escape_string($username), mysql_real_escape_string($hash));
    $result = mysql_query($query);
    if (!$result) {

        $warning = mysql_error();
       

        mysql_close($link);
        include 'newuserf.php';
    } else {


        mysql_query("commit;");

        mysql_close($link);





        header('Location: index.php');
    }
} else {
    $warning = " Hesla se neschoduji";
    include 'newuserf.php';

    header('Location: list.php');
}
?>
