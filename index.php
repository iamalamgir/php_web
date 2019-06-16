<?php 
session_start();
include 'header.php'; 
setcookie('visited', "", time() - 3600);
?>
    <section class="maincontent">
        
        <br/>
        <hr/>
        PHP array() Function - array_multisort
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
                $arr_one = array("Ox", "Dog", "Cat", "Horse", "Bear");
                array_multisort($arr_one);
                   
                print("<pre>");
                print_r($arr_one);
                print("</pre>");

                $arr_one = array("Ox", "Dog", "Cat", "Horse", "Bear");
                $arr_two = array("Ant", "Tiger", "Lion", "Fish", "Monkey");
                array_multisort($arr_one, $arr_two);
                   
                print("<pre>");
                print_r($arr_one);
                print("</pre>");

                print("<pre>");
                print_r($arr_two);
                print("</pre>");

                $arr_one = array("Ox", "Dog", "Cat", "Horse", "Bear");
                $arr_two = array("Ant", "Tiger", "Lion", "Fish", "Monkey");
                array_multisort($arr_one, SORT_DESC, $arr_two, SORT_ASC);
                   
                print("<pre>");
                print_r($arr_one);
                print("</pre>");

                print("<pre>");
                print_r($arr_two);
                print("</pre>");
                */

                $arr_one = array("Ox", "Dog", "Cat", "Horse", "Bear");
                $arr_two = array("Ant", "Tiger", "Lion", "Fish", "Monkey");
                array_multisort($arr_one, SORT_ASC, $arr_two);
                   
                print("<pre>");
                print_r($arr_one);
                print("</pre>");

                print("<pre>");
                print_r($arr_two);
                print("</pre>");
                
            ?>
            
    </section>        
<?php include 'footer.php'; ?>