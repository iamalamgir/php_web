<?php 
session_start();
include 'header.php'; 
setcookie('visited', "", time() - 3600);
?>
    <section class="maincontent">
        
        <br/>
        <hr/>
        PHP array() Function - array_key_exists
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
                $arr = array(
                    "name" => "Alamgir",
                    "age" => "23"
                );
                if(array_key_exists("name", $arr)){
                    echo "Key already exists";
                }else{
                    echo "Key does not exists";
                }
                */

                $arr = array("name", "age");
                if(array_key_exists("2", $arr)){
                    echo "Key already exists";
                }else{
                    echo "Key does not exists";
                }

                /*print("<pre>");
                print_r($result);
                print("</pre>");*/
                
            ?>
            
    </section>        
<?php include 'footer.php'; ?>