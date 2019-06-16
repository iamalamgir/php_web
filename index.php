<?php 
session_start();
include 'header.php'; 
setcookie('visited', "", time() - 3600);
?>
    <section class="maincontent">
        
        <br/>
        <hr/>
        PHP array() Function - array_unshift 
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
                $color = array(
                    "a" => "red", 
                    "b" => "blue", 
                    "c" => "orange", 
                    "d" => "skyblue", 
                );
                print("<pre>");
                print_r($color);
                print("</pre>");
                
                array_unshift($color, "black");

                print("<pre>");
                print_r($color);
                print("</pre>");
                */ 
                  
                $color = array(
                    "0" => "red", 
                    "1" => "blue", 
                    "2" => "orange", 
                    "3" => "skyblue", 
                );
                print("<pre>");
                print_r($color);
                print("</pre>");

                array_unshift($color, "yellow");

                print("<pre>");
                print_r($color);
                print("</pre>");
            
            ?>
            
            
    </section>        
<?php include 'footer.php'; ?>