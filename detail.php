<style type="text/css">
    td {
        padding: 10px;
    }
    img {
         width: 100%;    
         height:max-content;
         float:left;
         
        
        
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
                   
                        <?php echo "<img data-src='holder.js/100%x180' src=upload/". $row['IMGTemp'] . " /> "; ?>
                   
                </div>

                <?php
                mysql_free_result($result);
                ?>
        </div>
        <div id="comment" class="panel panel-default">
                    <div class="panel-heading">Leave a comment</div>
                    <div class="panel-body">
                        <form  class="form-horizontal" action="savecom.php" method="post" >
                            <div class="form-group">
                                <label for="jmeno" class="col-sm-2 control-label">Jméno:</label>
                                <div class="col-sm-5">      
                                    <input id="jmeno" class="form-control" placeholder="např: Jan Novák" type="text" name="jmeno" value=""> 

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="e-mail" class="col-sm-2 control-label">Email:</label>
                                <div class="col-sm-5">      
                                    <input id="e-mail" class="form-control" placeholder="jmeno@domena.cz" type="email" name="e-mail" value=""> 

                                </div>
                            </div>


                            <div class="form-group">
                                <label for="komentar" class="col-sm-2 control-label">Text komentáře:</label>
                                <div class="col-sm-5">      
                                    <textarea class="form-control" name="komentar" rows="10" cols="3" ></textarea>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="odeslat" class="col-sm-2 control-label"></label>
                                <div class="col-sm-5">  

                                    <button id="odeslat" type="submit" class="btn btn-primary btn-lg" name="submit">Odeslat</button>


                                </div>
                            </div>
                        </form>

                    
                </div>
            </div>
        
        <?php include"footer.html" ?>




    </body>
</html>
