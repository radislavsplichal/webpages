
<!DOCTYPE html>

<html >

       
  <?php 
include'connection.php';
$articleId = $_GET['article'];

$query = "SELECT ArticleID, Topic, Title, Article, IMG, Date FROM Articles WHERE ArticleID=".$articleId;


$result = mysql_query($query);
if (!$result) {
    die('Invalid query: ' . mysql_error());
}
$row = mysql_fetch_assoc($result);

#var_dump($row) ;
?>




<?php include'signup.php' ?>

<body>
    
    <div class="container">
        <section> 
        
    
    
    
        <h1>Aktualizovat Článek</h1>


        <!-- This is a Update Article Form -->
        
     <form  class="form-horizontal" action="save.php" method="post" >
         
        <div class="form-group">
     <label for="rubrika" class="col-sm-2 control-label">Rubrika:</label>
        <div class="col-sm-5">      
            
     
    <select id="rubrika" class="form-control" class="col-sm-5" name="selecttopic">

					<option <?php echo ($row['Topic'] == "rodina"? "selected":"");?> value="rodina">Rodina</option>
                    <option <?php echo ($row['Topic'] == "home"? "selected":"");?> value="home">Domů</option>
					 
                </select>
            </div>
            </div>
            
            <div class="form-group">
     <label for="nazevclanku" class="col-sm-2 control-label">Název článku:</label>
        <div class="col-sm-5">      
           <input id="nazevclanku" class="form-control" placeholder="Název" type="text" name="title" value="<?php echo $row['Title'];?>"> 

            </div>
        </div>

       <div class="form-group">
     <label for="nazevclanku" class="col-sm-2 control-label">Text článku:</label>
        <div class="col-sm-5">      
           <textarea class="form-control" name="articlebody" rows="10" cols="3" ><?php echo $row['Article'];?></textarea>
            </div>
        </div>
        
         
     <div class="form-group">
     <label for="obrazek" class="col-sm-2 control-label">Obrazek:</label>
        <div class="col-sm-5">      
           <input id="obrazek" class="form-control" type="file" name="fileimg" >

            </div>
        </div>
      
       <input name="Operation" type="hidden" value="update">
       <input name="OperationID" type="hidden" value="<?php echo $row['ArticleID'];?>">
        
            <div class="form-group">
     <label for="odeslat" class="col-sm-2 control-label"></label>
        <div class="col-sm-5">  
         
       <button id="odeslat" type="submit" class="btn btn-primary btn-lg" name="submit">Aktualizovat</button>


             </div>
        </div>
            
       
       
   
        
        </form>  
        
        </section>
     
        </div>


              
 
 

  
    
     <?php include"footer.html"?>
      
    </body>
</html>
<?php mysql_free_result($result);?>