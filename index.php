<?php 
session_start();
include 'header.php'; 
setcookie('visited', "", time() - 3600);
?>
    <section class="maincontent">
        
        <br/>
        <hr/>
        PHP array() Function - key(), krsort(), ksort() 
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
               $coder = array("Siam", "Alamgir", "Mahin", "Imran", "Shakil", "Hasive", "Shahik");
               echo "The current position key is: ".key($coder);

                $coder = array(
                   "Siam"    => "24", 
                   "Alamgir" => "23", 
                   "Mahin"   => "24", 
                   "Imran"   => "26", 
                   "Shakil"  => "25", 
                   "Hasive"  => "27", 
                   "Shahik"  => "28"
                );
                krsort($coder);
                foreach($coder as $key=>$value){
                   echo "Name: ".$key.", Age: ".$value."<br>"; 
                }
               */
               $coder = array(
                   "Siam"    => "24", 
                   "Alamgir" => "23", 
                   "Mahin"   => "24", 
                   "Imran"   => "26", 
                   "Shakil"  => "25", 
                   "Hasive"  => "27", 
                   "Shahik"  => "28"
                );
                ksort($coder);
                foreach($coder as $key=>$value){
                   echo "Name: ".$key.", Age: ".$value."<br>"; 
                }
            ?>
           
            
    </section>        
<?php include 'footer.php'; ?>