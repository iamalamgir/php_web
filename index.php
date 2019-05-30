<?php
    $fonts = "verdana";
    $bgcolor = "orange";
    $fontcolor = "blue";
?>

<!doctype html>
<html>
<head>
    <title>PHP Syntax</title>
    <style>
    .body{font-family:<?php echo $fonts;?>}

    .phpcoding{width: 900px; margin: 0 auto; background:<?php echo"#ddd" ?>;}

    .headeroption, .footeroption{background:<?php echo $bgcolor; ?>; color: <?php echo $fontcolor; ?>;
     padding: 15px; text-align: center;}

    .headeroption h2, .footeroption h2{margin: 0;}

    .maincontent{min-height: 400px; padding: 20px;}
    </style>
</head>
<body>

<div class="phpcoding">
    <section class="headeroption">
        <h2><?php echo"PHP Fundamentals Training"; ?></h2>
    </section>
    <section class="maincontent">
    
    <br/>
    <br/>
    PHP Functions
    <hr/>
    
        <?php
            /*
            function school(){
                echo "I am a student";
            }         
            school();

            function school($name){
                echo "$name is good school";
            }         
            school("Narayanganj High School");

            function school($name, $year){
                echo "$name is started $year <br/>";
            }         
            school("Narayanganj High School", "1975");
            school("Dhaka High School", "1990");
            school("AH High School", "2019");

            function school($name= "My School"){
                echo "$name is good <br/>";
            }         
            school("Narayanganj High School");
            school();
            school("Dhaka High School");
            school("AH High School");
            */

            function sum($x, $y){
                $z = $x + $y;
                return $z;
            }
            echo "5 + 10 = " .sum(5, 10);

        ?>
    </section>
    <section class="footeroption">
        <h2><?php echo"www.trainingwithliveproject.com"; ?></h2>
    </section>
</div>

</body>
</html>