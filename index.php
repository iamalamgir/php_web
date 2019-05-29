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
    
    Operators
    <br/>
    <br/>
    01. Arithmetic Operators <br/>
    02. Assignment Operators <br/>
    03. Comparison Operators <br/>
    04. Increment/Decrement Operators <br/>
    05. Logical Operators <br/>
    06. String Operators <br/>
    07. Array Operators 
    <br/>
    <hr/>
    05. Logical Operators ( &&'And' , ||'or' , xor , != , !== )
    <hr/>
    
        <?php
            /*
            $a = 20;
            $b = 10;
            
            if($a == 20 && $b == 10){
                echo "Training with live project";
            }else{
                echo "Wrong";
            }

            $a = 20;
            $b = 10;
            
            if($a == 20 And $b == 15){
                echo "Training with live project";
            }else{
                echo "Wrong";
            }

            $a = 20;
            $b = 10;
            
            if($a == 20 || $b == 10){
                echo "Training with live project";
            }else{
                echo "Wrong";
            }

            $a = 20;
            $b = 10;
            
            if($a == 20 or $b == 15){
                echo "Training with live project";
            }else{
                echo "Wrong";
            }

            $a = 20;
            $b = 10;
            
            if($a == 20 xor $b == 10){
                echo "Training with live project";
            }else{
                echo "Wrong";
            }

            $a = 20;
            $b = 10;
            
            if($a == 20 xor $b == 15){
                echo "Training with live project";
            }else{
                echo "Wrong";
            }

            $a = 20;
            $b = 10;
            
            if($a != 20){
                echo "Training with live project";
            }else{
                echo "Wrong";
            }

            */

            $a = 20;
            $b = 10;
            
            if($a !== 25){
                echo "Training with live project";
            }else{
                echo "Wrong";
            }
            
        ?>
    </section>
    <section class="footeroption">
        <h2><?php echo"www.trainingwithliveproject.com"; ?></h2>
    </section>
</div>

</body>
</html>