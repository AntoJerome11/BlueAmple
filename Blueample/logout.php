<?php
    session_start();
    session_unset();
    session_destroy();
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="shortcut icon" href="img/Blue.png" type="image/x-icon">   
        <title>Blue Ample Store</title>
        <meta charset="UTF-8">
         
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/custom.css" type="text/css">
    </head>
   
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <br>

            <div class="container">
                <div class="row">
                    <div class="col-xs-5">
                        <div class="panel panel-primary">
                            <div class="panel-heading"></div>
                            
                            <div class="panel-body">
                                <p>You have been logged out. <a href="login.php">Login again.</a></p>
                                <p>To return to main Page. <a href="index.php">click here.</a></p>
                            </div>
                            
                        </div> 
                    </div>
                </div>
            </div>
            <footer class="footer">
               <div class="container">
                <center>
                   <p>Copyright &copy <a href="#">Blue Ample</a> Store. All Rights Reserved.</p>
                   <p>This website is developed by Jerome Antefar</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
 
</html>
