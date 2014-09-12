<?php

if (isset($_SESSION['badpswd'])) {
    $warnpsw = true;
    echo 1;
} else {
    $warnpsw = false;
    echo 2;
}

if (isset($_SESSION['badcaptcha'])){
   $warnbadcaptcha = true;
   echo 3;
} else {
    $warnbadcaptcha = false;
    echo 4;
}
?>
<!DOCTYPE html>
<html lang="cs">
    <?php include('signup.php'); ?>
    <body>

        <div class="container">
            <section> 

                <h1>Nový uživatel</h1>
                <?php
                if (isset($warning)) {
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
                    <?php
                    if ($warnpsw) {

                        echo '<div class="form-group has-error">
                        <label for="password2" class="col-sm-2 control-label">Heslo znovu</label>
                        <div class="col-sm-5">      
                            <input type="password" id="password2" class="form-control" class="col-sm-5" name="password2">     
                            <span class="help-block">Hesla se neshoduji</span>
                        </div>';
                    } else {
                        echo '<div class="form-group">
                        <label for="password2" class="col-sm-2 control-label">Heslo znovu</label>
                        <div class="col-sm-5">      
                            <input type="password" id="password2" class="form-control" class="col-sm-5" name="password2">     
                            
                        </div>';
                    }
                    ?>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-5">      
                            <img id="captcha" src="/securimage/securimage_show.php" alt="CAPTCHA Image" />
                        </div>
                    </div>
                       <div class="form-group">
                        <div class="col-sm-5">      
                            <input type="text" name="captcha_code" size="10" maxlength="6" />
                            <a href="#" onclick="document.getElementById('captcha').src = '/securimage/securimage_show.php?' + Math.random();
                                return false">[ Different Image ]</a>   
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
