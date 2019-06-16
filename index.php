<?php 
session_start();
include 'header.php'; 
setcookie('visited', "", time() - 3600);
?>
    <section class="maincontent">
        
        <br/>
        <hr/>
        PHP array() Function - array_pad
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
               $arr = array("red", "green");
                $result = array_pad($arr, 5, "blue");

                print("<pre>");
                print_r($result);
                print("</pre>");
                */

                $arr = array("red", "green");
                $result = array_pad($arr, -5, "blue");

                print("<pre>");
                print_r($result);
                print("</pre>");
                
            ?>
            
    </section>        
<?php include 'footer.php'; ?>