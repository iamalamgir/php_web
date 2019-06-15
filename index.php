<?php 
session_start();
include 'header.php'; 
setcookie('visited', "", time() - 3600);
?>
    <section class="maincontent">
        
        <br/>
        <hr/>
        PHP array() Function - array_count_values
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
                $name = array("Alamgir", "Alamgir", "Siam", "Hasive", "Siam", "Hasive", "Siam", "Alamgir", "Alamgir");
                $age = array("23", "24", "25", "23", "24", "25", "23", "25", "23", "24", "24");
       
                print("<pre>");
                print_r(array_count_values($name));
                print("</pre>");
                */

                $name = array("Alamgir", "Alamgir", "Siam", "Hasive", "Siam", "Hasive", "Siam", "Alamgir", "Alamgir");
                $age = array("23", "24", "25", "23", "24", "25", "23", "25", "23", "24", "24");
       
                print("<pre>");
                print_r(array_count_values($age));
                print("</pre>");
                
            ?>
            
    </section>        
<?php include 'footer.php'; ?>