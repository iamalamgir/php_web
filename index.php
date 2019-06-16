<?php 
session_start();
include 'header.php'; 
setcookie('visited', "", time() - 3600);
?>
    <section class="maincontent">
        
        <br/>
        <hr/>
        PHP array() Function - array_shift 
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
                $color_one = array(
                    "a" => "red", 
                    "b" => "blue", 
                    "c" => "orange", 
                    "d" => "skyblue", 
                    "e" => "green", 
                    "f" => "yellow"
                );
                array_shift($color_one);
                
                print("<pre>");
                print_r($color_one);
                print("</pre>");
                */

                $color_one = array(
                    "0" => "red", 
                    "1" => "blue", 
                    "2" => "orange", 
                    "3" => "skyblue", 
                    "4" => "green", 
                    "5" => "yellow"
                );
                array_shift($color_one);
                
                print("<pre>");
                print_r($color_one);
                print("</pre>");
                
            ?>
            
            
    </section>        
<?php include 'footer.php'; ?>