<?php 
session_start();
include 'header.php'; 
setcookie('visited', "", time() - 3600);
?>
    <section class="maincontent">
        
        <br/>
        <hr/>
        PHP array() Function - array_merge
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
                $arr_one = array("red", "green");
                $arr_two = array("blue", "yellow");

                $result = array_merge($arr_one, $arr_two);
                   
                print("<pre>");
                print_r($result);
                print("</pre>");
                */

                $arr_one = array(
                    "a" => "red", 
                    "b" => "green"
                );
                $arr_two = array(
                    "c" => "blue", 
                    "b" => "yellow"
                );

                $result = array_merge($arr_one, $arr_two);
                   
                print("<pre>");
                print_r($result);
                print("</pre>");
                
            ?>
            
    </section>        
<?php include 'footer.php'; ?>