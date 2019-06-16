<?php 
session_start();
include 'header.php'; 
setcookie('visited', "", time() - 3600);
?>
    <section class="maincontent">
        
        <br/>
        <hr/>
        PHP array() Function - in_array 
        <span style= "float:right">
            <?php
                date_default_timezone_set('Asia/Dhaka');
                echo "Time : ".date("h:i:sa")."<br/>";
            ?>
        </span>
        <hr/>
        <br/>
        
            <?php
               
               $coder = array("Siam", "Alamgir", "Mahin", "Imran", "Shakil", "Hasive", "Shahik");
               if(isset($_POST['username'])){
                   $text = $_POST['username'];

                   if(in_array($text, $coder)){
                       echo "$text Exist.";
                   }else{
                    echo "$text Not Exist !!";
                   }
               }
            ?>
            <form action="index.php" method="post">
               <input type="text" name="username"/>
               <input type="submit" value="Submit"/>
            </form>
            
    </section>        
<?php include 'footer.php'; ?>