<style type="text/css">
    td {
        padding: 10px;
    }
    img {
        width: 100%;    
        height:max-content;
        float:left;



    }
    ul {
        list-style: none;
    }
    /*    section {
            padding: 10px ;
            margin-left: auto;
            margin-right: auto;
            width: 60%;
            border: 5px solid black;
            border-radius: 2%;}*/


    footer{
        clear:both;         

    }
    div#comment{
        margin-top: 10px;  
        clear:both;         
        width: 80%;
        margin-left: auto;
        margin-right: auto;
    }
    div.subsection {
        float:left;
        display:inline;    
        width: 100%;
        margin-bottom: 10px;
    }
    div.jumbotron{

        float:left;
        width:50%;
    }
    div#image {
        width:50%;
    }
   .crtime,.username {
                display: inline-block;
                margin: 10px;
                padding: 2px;
                font-family: sans-serif;
                
            }
            .username{
                font-weight: bold;
            }
            
            .parahraphtext {
               margin: 10px;
                padding: 2px; 
                width: 90%;
                font-size: 16px;
                 font-family: sans-serif;
            }



</style>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Detail Článku</title>
    </head>
    <body>




        <?php
        include'signup.php';
        ?>
        <div class="subsection">
            <div id="clanek "class="jumbotron">
                <?php
                $articleId = $_GET['article'];

                include'connection.php';

                $query = "SELECT ArticleID, Topic, Title, Article, IMGTemp, Date FROM Articles WHERE ArticleID=" . $articleId;

                $result = mysql_query($query);

                $row = mysql_fetch_assoc($result);


                echo "<h1>" . $row['Title'] . "</h1><br>";
                echo "<h3>" . $row['Topic'] . "</h3><br>";
                echo "<p>" . $row['Date'] . "</p><br>";
                echo "<p>" . $row['Article'] . "</p><br>";
                ?>
            </div>
            <div id="image" class="col-xs-6 col-md-3">

                <?php echo "<img data-src='holder.js/100%x180' src=upload/" . $row['IMGTemp'] . " /> "; ?>

            </div>
            <?php
            mysql_free_result($result);
            ?>
            <div class="subsection">
                <div id="clanek "class="jumbotron">  
                    <ul>
                        
                    <?php
                    $query = sprintf("SELECT comment_text, cr_date, username FROM comments INNER JOIN members on comments.mid = members.id WHERE article_id = ('%s')", $articleId);
                    $result = mysql_query($query);
                    while ($rowcomm = mysql_fetch_assoc($result)) {
                        echo "<li><div class='username'>" . $rowcomm['username'] . "</div>";
                        echo "<div class='crtime'> " . $rowcomm['cr_date'] . "</div>";
                        echo "<div class='parahraphtext'>" . $rowcomm['comment_text'] . " </div></li>";
                    }
                    mysql_free_result($result);
                    ?> 
                    </ul>    
                    
                </div>   
            </div>        
        </div>
        <?php if (isset($_SESSION['username'])) {
            include"commentform.php";
        }
        ?>
<?php include"footer.html" ?>


            

        
        
          

        
       

    </body>
</html>
