<?php 
session_start();
include 'header.php'; 
setcookie('visited', "", time() - 3600);
?>
    <section class="maincontent">
        
        <br/>
        <hr/>
        PHP array() Function - array_diff_assoc
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
                
                */

                $array_one =array(
                    "a" => "red",
                    "b" => "white",
                    "c" => "blue",
                    "d" => "yellow"
                );
                $array_two =array(
                    "a" => "red",
                    "b" => "green",
                    "c" => "blue"
                );
                
                $differ = array_diff_assoc($array_one, $array_two);

                print("<pre>");
                print_r($differ);
                print("</pre>");
                
            ?>
            
    </section>        
<?php include 'footer.php'; ?>