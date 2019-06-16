<?php 
session_start();
include 'header.php'; 
setcookie('visited', "", time() - 3600);
?>
    <section class="maincontent">
        
        <br/>
        <hr/>
        PHP array() Function - array_walk 
        <span style= "float:right">
            <?php
                date_default_timezone_set('Asia/Dhaka');
                echo "Time : ".date("h:i:sa")."<br/>";
            ?>
        </span>
        <hr/>
        <br/>
        
            <?php
                function myfunction($department, $name){
                    echo "$name come from $department department <br>";
                }
            
                $name = array(
                    "Alamgir" => "Accounting", 
                    "Siam"    => "Maths", 
                    "Hasive"  => "Physics"
                );
                array_walk($name, "myfunction");
               
            ?>
            
            
    </section>        
<?php include 'footer.php'; ?>