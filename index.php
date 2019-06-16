<?php 
session_start();
include 'header.php'; 
setcookie('visited', "", time() - 3600);
?>
    <section class="maincontent">
        
        <br/>
        <hr/>
        PHP array() Function - current 
        <span style= "float:right">
            <?php
                date_default_timezone_set('Asia/Dhaka');
                echo "Time : ".date("h:i:sa")."<br/>";
            ?>
        </span>
        <hr/>
        <br/>
        
            <?php
               
               $name = array("Siam", "Alamgir", "Mahin", "Imran", "Shakil", "Hasive", "Shahik");
               print("<pre>");
               print_r($name);
               print("<pre>");

               echo "Current value: ".current($name)."<br>";
               echo "Next value: ".next($name)."<br>";

               echo "Current value: ".current($name)."<br>";
               echo "Previous value: ".prev($name)."<br>";

               echo "Last value: ".end($name)."<br>";
               
            ?>
            
            
    </section>        
<?php include 'footer.php'; ?>