<?php 
session_start();
include 'header.php'; 
setcookie('visited', "", time() - 3600);
?>
    <section class="maincontent">
        
        <br/>
        <hr/>
        PHP array() Function - shuffle 
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
                print"<pre>";
                print_r($name);
                print"</pre>";

                shuffle($name);

                print"<pre>";
                print_r($name);
                print"</pre>";
            ?>
           
            
    </section>        
<?php include 'footer.php'; ?>