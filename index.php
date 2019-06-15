<?php 
session_start();
include 'header.php'; 
setcookie('visited', "", time() - 3600);
?>
    <section class="maincontent">
        
        <br/>
        <hr/>
        PHP Error Handling with Exception
        <span style= "float:right">
            <?php
                date_default_timezone_set('Asia/Dhaka');
                echo "Time : ".date("h:i:sa")."<br/>";
            ?>
        </span>
        <hr/>
        <br/>
        
            <?php
                /*function numCheck($num){
                    if($num > 1){
                        throw new Exception("Value must be 1 or bleow");
                    }
                    return true;
                }
                try{
                    numCheck(2);
                    echo "If you see this, the number is 1 or below";
                }

                catch(Exception $e){
                    echo "Message: ".$e->getMessage();
                }*/

                function numCheck($num){
                    if($num != 5){
                        throw new Exception("Number is not 5");
                    }
                    return true;
                }
                try{
                    numCheck(2);
                    echo "Yes you have done";
                }

                catch(Exception $e){
                    echo "Error: ".$e->getMessage();
                }
                
            ?>

    </section>        
<?php include 'footer.php'; ?>