<?php 
session_start();
include 'header.php'; 
setcookie('visited', "", time() - 3600);
?>
    <section class="maincontent">
        
        <br/>
        <hr/>
        PHP array() Function - array_sum 
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
                $sum = array(10, 30, 50);
                $result = array_sum($sum);
                echo "Total: ".$result;
                */

                $sum = array(
                    "a" => "20", 
                    "b" => "15", 
                    "c" => "35", 
                    "d" => "55"
                );
                $result = array_sum($sum);
                echo "Total: ".$result;
               
            ?>
            
            
    </section>        
<?php include 'footer.php'; ?>