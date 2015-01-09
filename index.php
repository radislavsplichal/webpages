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
                div#content{
                    width: 70%;
					background-color:white;
					padding:5px;
					margin:5px;
                }

            </style>
        <div class="jumbotron">
           
            <h1><a href="#top">Welcome</a></h1>
            <hr>

            <div id="content">
                <?php 
                include 'home.php';
                ?>
            </div>
            <p><a href="#top" class="btn btn-primary btn-lg" role="button">Back on Top &raquo;</a></p>



            <?php
            include'footer.html';
            ?>
        </div>
    </body>
</html>
