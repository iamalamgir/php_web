<?php 
session_start();
include 'header.php'; 
setcookie('visited', "", time() - 3600);
?>
    <section class="maincontent">
        
        <br/>
        <hr/>
        PHP array() Function - array_values 
        <span style= "float:right">
            <?php
                date_default_timezone_set('Asia/Dhaka');
                echo "Time : ".date("h:i:sa")."<br/>";
            ?>
        </span>
        <hr/>
        <br/>
        
            <?php
            
                $color = array(
                    "a" => "red", 
                    "b" => "blue", 
                    "c" => "orange", 
                    "d" => "skyblue", 
                    "e" => "blue",
                    "a" => "red",
                    "c" => "orange", 
                    "f" => "yellow"
                );
                $result = array_values($color);

                print("<pre>");
                print_r($result);
                print("</pre>");
            
            ?>
            
            
    </section>        
<?php include 'footer.php'; ?>