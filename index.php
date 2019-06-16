<?php 
session_start();
include 'header.php'; 
setcookie('visited', "", time() - 3600);
?>
    <section class="maincontent">
        
        <br/>
        <hr/>
        PHP array() Function - array_replace
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
                $color_one = array("red", "blue");
                $color_tow = array("green", "yellow");
                $result = array_replace($color_one, $color_tow);

                print("<pre>");
                print_r($result);
                print("</pre>");

                $color_one = array("a"=>"red", "b"=>"blue");
                $color_tow = array("a"=>"green", "yellow");
                $result = array_replace($color_one, $color_tow);

                print("<pre>");
                print_r($result);
                print("</pre>");
                */

                $color_one = array("red", "blue");
                $color_tow = array("green", "yellow");
                $color_three = array("orange", "skyblue");
                $result = array_replace($color_one, $color_tow, $color_three);

                print("<pre>");
                print_r($result);
                print("</pre>");
                
                
            ?>
            
    </section>        
<?php include 'footer.php'; ?>