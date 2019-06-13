<?php 
session_start();
include 'header.php'; 
?>
    <section class="maincontent">
        
        <br/>
        <hr/>
        PHP Sessions
        <span style= "float:right">
            <?php
                date_default_timezone_set('Asia/Dhaka');
                echo "Time : ".date("h:i:sa")."<br/>";
            ?>
        </span>
        <hr/>
        <br/>

        <?php
           $_SESSION['user']     = " Alamgir";
           $_SESSION['password'] = " 123";

           echo "Username is".$_SESSION['user']."<br/>";
           //session_unset();
           echo "password is".$_SESSION['password'];
           session_destroy();
        ?>

    </section>        
<?php include 'footer.php'; ?>