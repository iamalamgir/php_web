<?php 
session_start();
include 'header.php'; 
setcookie('visited', "", time() - 3600);
?>
    <section class="maincontent">
        
        <br/>
        <hr/>
        PHP array() Function - arsort & asort 
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
                $num = array(
                    "Alamgir" => "Accounting", 
                    "Siam"    => "Maths", 
                    "Hasive"  => "Physics",
                    "Imran"   => "English"
                );
                arsort($num);
                foreach($num as $name=>$department){
                    echo "Name: ".$name.". Department: ".$department."<br>";
                }
                */

                $num = array(
                    "Alamgir" => "Accounting", 
                    "Siam"    => "Maths", 
                    "Hasive"  => "Physics",
                    "Imran"   => "English"
                );
                asort($num);
                foreach($num as $name=>$department){
                    echo "Name: ".$name.". Department: ".$department."<br>";
                }
               
            ?>
            
            
    </section>        
<?php include 'footer.php'; ?>