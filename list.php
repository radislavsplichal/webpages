

<?php include'signup.php'?>

    <body>
        <section>

        <div class="container">

<?php


include'connection.php';

$query = "SELECT ArticleID, Topic, Title, Article, IMGTemp, Date FROM Articles ORDER BY Date";

$result = mysql_query($query);

echo "<table class='table table-striped table-hover table-condensed'>
<tr>
<th>Rubrika</th>
<th>Titulek</th>
<th>Članek</th>
<th>Obrázek</th>
<th>Datum</th>
<th>Update</th>
<th>Smazat</th>
</tr>";


while ($row = mysql_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row['Topic']."</td>";
    echo "<td>".$row['Title']."</td>";
    echo "<td><a href='detail.php?article=".$row['ArticleID']."'>Detail Článku</a></td>";
    echo "<td> <img src='upload/".$row['IMGTemp']."' with='25px' height='25px' /></td>";
    
    echo "<td>". date('d. m. Y H:i:s ', strtotime($row['Date']))  ."</td>";
     #echo "<td>". $row['Date']  ."</td>";
    
    echo "<td align='center'>
    <a href='updateform.php?article=".$row['ArticleID']."'><span class='glyphicon glyphicon-edit'></span> </a> </td>";
    
    echo "<td align='center'><div id='mymodal'><a href='#myModal' data-id='".$row['ArticleID']."' class='glyphicon glyphicon-minus-sign delete-article' ></a></div></td>";
    
    echo "</tr>";
}
echo "</table>";
mysql_free_result($result);
mysql_close($link);



?>
           <?php include"footer.html"?>   
             </div>
           
        </section> 
        <script>
            $(document).ready(function () {
                $(document).on("click", ".delete-article", function (e) {
                    console.log("volani");
                    e.preventDefault();

                    var _self = $(this);

                    var myBookId = _self.data('id');
                    $("#condelete").attr('data-id',myBookId);

                    $(_self.attr('href')).modal('show');
                });

                $("#condelete").click(function () {
                    var _self = $(this);
                    var artId = _self.data('id');
                    
               window.location = "delete.php?article="+artId;
                });
            });


        </script>
          
        <div id="myModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Smazat Článek</h4>
      </div>
      <div class="modal-body">
        <p>Opravdu chcete smazat tento článek?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Ne!</button>
        <button id="condelete" type="button" class="btn btn-primary">Ano, smazat!</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


    </body>
</html>

