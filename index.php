<?php 
session_start();
include 'header.php'; 
setcookie('visited', "", time() - 3600);
?>
    <section class="maincontent">
        
        <br/>
        <hr/>
        PHP array() Function - array_change_key_case()
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
                $name = array(
                    "Siam"    => "24",
                    "Hasive"  => "26",
                    "Alamgir" => "23",
                    "Mahin"   => "30",
                    "Imran"   => "27",
                    "Belal"   => "28",
                );
                print("<pre>");
                print_r(array_change_key_case($name, CASE_UPPER));
                print("</pre>");
                */

                $name = array(
                    "SIAM"    => "24",
                    "Hasive"  => "26",
                    "Alamgir" => "23",
                    "Mahin"   => "30",
                    "IMRAN"   => "27",
                    "Belal"   => "28",
                );
                print("<pre>");
                print_r(array_change_key_case($name, CASE_LOWER));
                print("</pre>");
                
            ?>
            
    </section>        
<?php include 'footer.php'; ?>