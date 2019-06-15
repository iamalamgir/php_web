<?php 
session_start();
include 'header.php'; 
setcookie('visited', "", time() - 3600);
?>
    <section class="maincontent">
        
        <br/>
        <hr/>
        PHP array() Function - Create Array
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
                $car = array("Volvo", "BMW", "Toyota");
                echo $car[1];

                $car = array("Volvo", "BMW", "Toyota");
                $length = count($car);
                echo $length;

                $car = array("Volvo", "BMW", "Toyota");
                $length = count($car);
                for($i = 0; $i < $length; $i++){
                    echo $car[$i]."<br>";
                }

                $age = array(
                    "Siam"    => "24",
                    "Hasive"  => "26",
                    "Alamgir" => "23",
                    "Mahin"   => "30",
                    "Imran"   => "27",
                    "Belal"   => "28",
                );
                foreach($age as $key=> $value){
                    echo "Name = ".$key.", Age = ".$value;
                    echo "<br>";
                }
                */

                $car = array(
                    array("Volvo", "100", "90"),
                    array("BMW", "50", "70"),
                    array("Toyota", "120", "190")
                );
                echo $car[2][0];
                
            ?>
            
    </section>        
<?php include 'footer.php'; ?>