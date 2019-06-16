<?php 
session_start();
include 'header.php'; 
setcookie('visited', "", time() - 3600);
?>
    <section class="maincontent">
        
        <br/>
        <hr/>
        PHP array() Function - array_keys
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
                $car = array(
                    "Volvo"  => "xc90",
                    "BMW"    => "x5",
                    "Toyota" => "Highlander"
                );
                $result = array_keys($car);

                print("<pre>");
                print_r($result);
                print("</pre>");
                */

                $car = array(
                    "Volvo"  => "xc90",
                    "BMW"    => "x5",
                    "Toyota" => "Highlander"
                );
                $result = array_keys($car, "x5");

                print("<pre>");
                print_r($result);
                print("</pre>");
                
            ?>
            
    </section>        
<?php include 'footer.php'; ?>