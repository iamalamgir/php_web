<?php 
session_start();
include 'header.php'; 
setcookie('visited', "", time() - 3600);
?>
    <section class="maincontent">
        
        <br/>
        <hr/>
        PHP explode() & implode() Function
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
                $mystr = "We are learning PHP";
                $str = explode(" ", $mystr);
                echo $str[3];
                */
                
                $mystr = array("We", "are", "learning", "PHP");
                echo implode(" ", $mystr);
            ?>

    </section>        
<?php include 'footer.php'; ?>