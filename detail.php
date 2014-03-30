<style type="text/css">
    td {
        padding: 10px;
    }
    img {
        width: 20px;
        height: 20px;
    }
    section {
        padding: 10px ;
        margin-left: auto;
        margin-right: auto;
        width: 60%;
        border: 5px solid black;
        border-radius: 2%;

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

        <div class="jumbotron">
            <?php
            $articleId = $_GET['article'];

            include'connection.php';

            $query = "SELECT ArticleID, Topic, Title, Article, IMGTemp, Date FROM Articles WHERE ArticleID=" . $articleId;

            $result = mysql_query($query);

            $row = mysql_fetch_assoc($result);


            echo "<h1>" . $row['Topic'] . "</h1><br>";
            echo "<p>" . $row['Date'] . "</p><br>";
            echo "<p>" . $row['Article'] . "</p><br>";
            echo "<img width='auto' height='auto' src=upload/".$row['IMGTemp']." /> ";


            mysql_free_result($result);
            ?>
            <div class="panel panel-default">
                <div class="panel-heading">Leave a comment</div>
                <div class="panel-body">
                    <form  class="form-horizontal" action="comment.php" method="post" >
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
                    </form>

                </div>
            </div>
        </div>
        <?php include"footer.html" ?>




    </body>
</html>
