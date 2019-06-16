<?php 
session_start();
include 'header.php'; 
setcookie('visited', "", time() - 3600);
?>
    <section class="maincontent">
        
        <br/>
        <hr/>
        PHP array() Function - array_map
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
                function myfunction($value){
                    return($value + $value);
                }
                $arr = array(1, 2, 3, 4, 5);
                $result = array_map(myfunction, $arr);

                print("<pre>");
                print_r($result);
                print("</pre>");

                function myfunction($value){
                    $v = strtoupper($value);
                    return $v;
                }
                $arr = array(
                    "Animal" => "cow",
                    "Type"   => "mammal"
                );
                $result = array_map("myfunction", $arr);

                print("<pre>");
                print_r($result);
                print("</pre>");
                */

                function myfunction($value){
                    $v = strtolower($value);
                    return $v;
                }
                $arr = array(
                    "Animal" => "COW",
                    "Type"   => "MAMMAL"
                );
                $result = array_map("myfunction", $arr);

                print("<pre>");
                print_r($result);
                print("</pre>");
                
            ?>
            
    </section>        
<?php include 'footer.php'; ?>