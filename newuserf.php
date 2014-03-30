<!DOCTYPE html>

<html lang="cs">
    <?php include('signup.php'); ?>
    <body>

        <div class="container">
            <section> 

                <h1>Nový uživatel</h1>
                <?php 
                if (isset($warning)){
                    echo $warning;
                }
                ?>

                <form class="form-horizontal" method="post" action="saveu.php">

                    <div class="form-group">
                        <label for="username" class="col-sm-2 control-label">Uživatelské jméno</label>
                        <div class="col-sm-5">      
                            <input type="email" id="username" class="form-control" class="col-sm-5" name="username">
                        </div>
                    </div>
                    
                    
                    <div class="form-group">
                        <label for="password" class="col-sm-2 control-label">Heslo</label>
                        <div class="col-sm-5">      
                            <input type="password" id="password" class="form-control" class="col-sm-5" name="password">     
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password2" class="col-sm-2 control-label">Heslo znovu</label>
                        <div class="col-sm-5">      
                            <input type="password" id="password2" class="form-control" class="col-sm-5" name="password2">     
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label for="odeslat" class="col-sm-2 control-label"></label>
                        <div class="col-sm-5">  

                            <button id="odeslat" type="submit" class="btn btn-primary btn-lg" name="submit">Odeslat</button>


                        </div>
                    </div>

                </form>
            </section>
        </div>
    </body>




    <?php
    /*
     * To change this license header, choose License Headers in Project Properties.
     * To change this template file, choose Tools | Templates
     * and open the template in the editor.
     */
    ?>