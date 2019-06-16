<?php 
session_start();
include 'header.php'; 
setcookie('visited', "", time() - 3600);
?>
    <section class="maincontent">
        
        <br/>
        <hr/>
        PHP array() Function - array_reverse
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
                $result = array_reverse($color_one);

                print("<pre>");
                print_r($result);
                print("</pre>");

                $color_one = array("red", "blue", "orange", "skyblue", "green", "yellow");
                $result = array_reverse($color_one);

                print("<pre>");
                print_r($color_one);
                print("</pre>");

                print("<pre>");
                print_r($result);
                print("</pre>");
                */

                $color_one = array("a"=>"red", "b"=>"blue", "c"=>"orange", "d"=>"skyblue", "e"=>"green", "f"=>"yellow");
                $result = array_reverse($color_one, true);

                print("<pre>");
                print_r($color_one);
                print("</pre>");

                print("<pre>");
                print_r($result);
                print("</pre>");
                
                
            ?>
            
    </section>        
<?php include 'footer.php'; ?>