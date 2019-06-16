<?php 
session_start();
include 'header.php'; 
setcookie('visited', "", time() - 3600);
?>
    <section class="maincontent">
        
        <br/>
        <hr/>
        PHP array() Function - array_slice 
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
                $color_one = array("red", "blue", "orange", "skyblue", "green", "yellow");
                $result = array_slice($color_one, 1);
                
                print("<pre>");
                print_r($result);
                print("</pre>");

                $color_one = array("red", "blue", "orange", "skyblue", "green", "yellow");
                $result = array_slice($color_one, 1, 4);
                
                print("<pre>");
                print_r($result);
                print("</pre>");
                */

                $color_one = array("red", "blue", "orange", "skyblue", "green", "yellow");
                $result = array_slice($color_one, -5, 3);
                
                print("<pre>");
                print_r($result);
                print("</pre>");
                
            ?>
            
            
    </section>        
<?php include 'footer.php'; ?>