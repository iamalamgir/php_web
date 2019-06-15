<?php 
session_start();
include 'header.php'; 
setcookie('visited', "", time() - 3600);
?>
    <section class="maincontent">
        
        <br/>
        <hr/>
        PHP Error Handling
        <span style= "float:right">
            <?php
                date_default_timezone_set('Asia/Dhaka');
                echo "Time : ".date("h:i:sa")."<br/>";
            ?>
        </span>
        <hr/>
        <br/>
        
            <?php
                error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
                $price = 45;
                if($price == 45){
                    echo "The price is $price";
                }else{
                    echo "Price is not $price";
                }
            ?>

    </section>        
<?php include 'footer.php'; ?>