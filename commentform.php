
<div id="comment" class="panel panel-default">
                    <div class="panel-heading">Leave a comment</div>
                    <div class="panel-body">
                        <form  class="form-horizontal" action="upcomment.php" method="post" >
                            
                           
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
                            <input type="hidden" name="articleid" value="<?php echo $row['ArticleID'];?>">
                        </form>

                    
                </div>
            </div>

