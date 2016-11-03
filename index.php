<?php

include 'connection.php';

?>

<!DOCTYPE html>
<html lang="cs">
    <head>
        <meta charset="utf-8">

        <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
        Remove this if you use the .htaccess -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>Radislav Splichal</title>
        <meta name="description" content="Personal page">
        <!-- <meta name="author" content="Ruda"> -->
        <script type="text/javascript" src="javascript.js"></script>

    </head>

    <body onload="process()">

        <?php //include'signup.php';?>

        <div class="jumbotron">

          <div id="content">
            <h2>The sipmple AJAX script</h2>

            <p>This is so cool</p>

            <input type="text" id="userInput" name="test">
            <div id="underInput">


              <?php include 'home.php' ?>

            </div>
            <?php
            include 'footer.html';
            ?>
        </div>
    </body>
</html>
