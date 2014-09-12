<?php
session_start();
//echo $_SESSION['admin'];
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="dist/css/bootstrap.css" type="text/css" />
    <script src="dist/js/jquery-1.11.0.js"></script>
    <script src="dist/js/bootstrap.js"></script>
    <script src="dist/js/freewall.js"></script>
    <style>

        table {
            margin-top: 30px
        }

        .navbar-inverse {
            background: rgb(69,72,77); /* Old browsers */
            background: -moz-linear-gradient(top,  rgba(69,72,77,1) 0%, rgba(0,0,0,1) 100%); /* FF3.6+ */
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(69,72,77,1)), color-stop(100%,rgba(0,0,0,1))); /* Chrome,Safari4+ */
            background: -webkit-linear-gradient(top,  rgba(69,72,77,1) 0%,rgba(0,0,0,1) 100%); /* Chrome10+,Safari5.1+ */
            background: -o-linear-gradient(top,  rgba(69,72,77,1) 0%,rgba(0,0,0,1) 100%); /* Opera 11.10+ */
            background: -ms-linear-gradient(top,  rgba(69,72,77,1) 0%,rgba(0,0,0,1) 100%); /* IE10+ */
            background: linear-gradient(to bottom,  rgba(69,72,77,1) 0%,rgba(0,0,0,1) 100%); /* W3C */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#45484d', endColorstr='#000000',GradientType=0 ); /* IE6-9 */

        }
        a.delete-article:hover {
            text-decoration: none;
        }
    </style>



</head>
<body>

    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">radislavsplichal.cz</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <!--  INVISIBLE FOR ANONYMOUS   -->
                <ul class="nav navbar-nav"> 
                    <li><a href="newuserf.php">Registrace</a></li>
                    <?php
                    if (isset($_SESSION['admin'])) {
                        if ($_SESSION['admin'] == 1) {
                            echo ' 
                        <li><a href="newarticleform.php">Nový článek</a></li>
                        <li><a href="list.php">Seznam článků</a></li>
                    ';
                        }
                    }
                    ?> 
                </ul>
                <?php
                if (isset($_SESSION['username'])) {
                    include '/core/signout.html';
                } else {
                    include '/core/signin.html';
                    #echo $_SESSION['username'];
                }
                ?>    
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>







</body>
</html>
