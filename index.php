<?php 
session_start();
include 'header.php'; 
setcookie('visited', "", time() - 3600);
?>
    <section class="maincontent">
        
        <br/>
        <hr/>
        PHP array() Function - array_combine()
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
                $name = array("Alamgir", "Siam", "Hasive");
                $department = array("Accounting", "Computer Science", "Physics");

                $combine = array_combine($name, $department);        
                print("<pre>");
                print_r($combine);
                print("</pre>");
                */

                $name = array("Alamgir", "Siam", "Hasive");
                $age = array("23", "24", "25");

                $combine = array_combine($name, $age);        
                print("<pre>");
                print_r($combine);
                print("</pre>");
                
            ?>
            
    </section>        
<?php include 'footer.php'; ?>