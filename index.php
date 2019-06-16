<?php 
session_start();
include 'header.php'; 
setcookie('visited', "", time() - 3600);
?>
    <section class="maincontent">
        
        <br/>
        <hr/>
        PHP array() Function - array_pop & array_push
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
                $arr = array("red", "green", "blue", "skyblue");
                array_pop($arr);

                print("<pre>");
                print_r($arr);
                print("</pre>");

                $arr = array("red", "green", "blue");
                array_push($arr, "skyblue", "yellow", "black");

                print("<pre>");
                print_r($arr);
                print("</pre>");
                */

                $arr = array("a"=>"red", "b"=>"green", "c"=>"blue");
                array_push($arr, "skyblue", "yellow", "black");

                print("<pre>");
                print_r($arr);
                print("</pre>");
                
            ?>
            
    </section>        
<?php include 'footer.php'; ?>