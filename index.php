<?php 
session_start();
include 'header.php'; 
setcookie('visited', "", time() - 3600);
?>
    <section class="maincontent">
        
        <br/>
        <hr/>
        PHP array() Function - compact 
        <span style= "float:right">
            <?php
                date_default_timezone_set('Asia/Dhaka');
                echo "Time : ".date("h:i:sa")."<br/>";
            ?>
        </span>
        <hr/>
        <br/>
        
            <?php
               
               $name  = "Alamgir";
               $dep   = "Accounting";
               $coder = "PHP";

               $result = compact("name", "dep", "coder");

               print("<pre>");
               print_r($result);
               print("<pre>");
            ?>
            
            
    </section>        
<?php include 'footer.php'; ?>