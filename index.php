<?php
    session_start();
    //echo $_SESSION['admin'];
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
        <meta name="author" content="Ruda">

        
    </head>

    <body>

        <?php
        include'signup.php';
        include'header.html';
        ?>


        <div class="jumbotron">
            <style>
           
            p{
                text-align: left;
            }

            a {
                text-decoration: none;
                color: black;
            }
            a:hover {
                text-decoration: none;
                color: grey;
            }

        </style>
            <h1><a href="#top">Welcome</a></h1>
            <hr>




            <?php
            include 'home.php';
            ?>

            <p><a href="#top" class="btn btn-primary btn-lg" role="button">Back on Top &raquo;</a></p>
        </div>


<?php
include'footer.html';
?>
    </body>
</html>
