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
    PHP Conditional Statements (if , if else , if else if)
    <hr/>
    
        <?php
            /*
            $x = 10;
            if($x > 5){
                echo "Training with live project";
            }

            $x = 10;
            if($x > 15){
                echo "Training with live project";
            }else{
                echo "Wrong";
            } 
            
            $x = 10;
            if($x > 15){
                echo "x is greater then 15";
            }elseif($x > 13){
                echo "x is greater then 13";
            }elseif($x > 12){
                echo "x is greater then 12";
            }elseif($x > 11){
                echo "x is greater then 11";
            }else{
                echo "Please give a value smaller then 10";
            }
            
            */

            $x = 10;
            if($x > 15){
                echo "x is greater then 15";
            }elseif($x > 13){
                echo "x is greater then 13";
            }elseif($x > 12){
                echo "x is greater then 12";
            }elseif($x > 5){
                echo "x is greater then 5";
            }else{
                echo "Please give a value smaller then 10";
            }

        ?>
    </section>
    <section class="footeroption">
        <h2><?php echo"www.trainingwithliveproject.com"; ?></h2>
    </section>
</div>

</body>
</html>