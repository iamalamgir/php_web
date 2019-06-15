<?php 
session_start();
include 'header.php'; 
setcookie('visited', "", time() - 3600);
?>
    <section class="maincontent">
        
        <br/>
        <hr/>
        PHP require or require_once
        <span style= "float:right">
            <?php
                date_default_timezone_set('Asia/Dhaka');
                echo "Time : ".date("h:i:sa")."<br/>";
            ?>
        </span>
        <hr/>
        <br/>
        
            <?php
                /*
                 require "new.php";
                 
                require "new.php";
                require "new.php";

                require_once "new.php";
                */

                require "new.php";
                require_once "new.php";
                
            ?>
            
    </section>        
<?php include 'footer.php'; ?>