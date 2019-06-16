<?php 
session_start();
include 'header.php'; 
setcookie('visited', "", time() - 3600);
?>
    <section class="maincontent">
        
        <br/>
        <hr/>
        PHP array() Function - array_product
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
                $arr = array(5, 5);
                echo array_product($arr);
                */

                $arr = array(5, 5, 4, 10);
                echo array_product($arr);
                
                
            ?>
            
    </section>        
<?php include 'footer.php'; ?>