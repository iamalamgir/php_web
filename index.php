<?php 
session_start();
include 'header.php'; 
setcookie('visited', "", time() - 3600);
?>
    <section class="maincontent">
        
        <br/>
        <hr/>
        PHP Filters
        <span style= "float:right">
            <?php
                date_default_timezone_set('Asia/Dhaka');
                echo "Time : ".date("h:i:sa")."<br/>";
            ?>
        </span>
        <hr/>
        <br/>
        
            <?php
                /*$str = "<h2> I am Learning PHP.</h2>";
                $newstr = filter_var($str, FILTER_SANITIZE_STRING);
                echo $newstr; 

                $int = 50;
                if(filter_var($int, FILTER_VALIDATE_INT)){
                    echo "It is Interger Value.";
                }else{
                    echo "It is Not Interger Value.";
                }

                $ip = "127.0.0.1";
                if(filter_var($ip, FILTER_VALIDATE_IP)){
                    echo "$ip is valid IP Address.";
                }else{
                    echo "$ip is not valid IP Address.";
                }

                $email = "alamgir@gmail.com";
                if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                    echo "$email is valid Email Address.";
                }else{
                    echo "$email is not valid Email Address.";
                }*/

                $url = "http://www.trainingwithliveproject.com";
                if(filter_var($url, FILTER_VALIDATE_URL)){
                    echo "$url is valid Website Address.";
                }else{
                    echo "$url is not valid Website Address.";
                }
            ?>

    </section>        
<?php include 'footer.php'; ?>