<?php 
session_start();
include 'header.php'; 
setcookie('visited', "", time() - 3600);
?>
    <section class="maincontent">
        
        <br/>
        <hr/>
        PHP Cookies
        <span style= "float:right">
            <?php
                date_default_timezone_set('Asia/Dhaka');
                echo "Time : ".date("h:i:sa")."<br/>";
            ?>
        </span>
        <hr/>
        <br/>

        <?php
           //setcookie(name, value, expire, path, domain, secure, httponly);

           /*if(!isset($_COOKIE['visited'])){
               setcookie("visited", "1", time()+86400, "/") or die("Could not set cookie !");
               echo "This is your first visit in this website.";
           }else{
               echo "You are our old visitor";
           }*/
           echo "Cookies deleted";
        ?>

    </section>        
<?php include 'footer.php'; ?>