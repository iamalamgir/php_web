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
    07. Array Operators
    <hr/>
    
        <?php
            /*
            $x = array("a" => "Dhaka" , "b" => "Sylhet");
            $y = array("c" => "Comilla" , "d" => "Pavna");
            var_dump($x + $y);

            $x = array(
                "a" => "Dhaka" ,
                "b" => "Sylhet"
            );
            $y = array(
                "c" => "Comilla" ,
                "d" => "Pavna"
            );
            var_dump($x == $y);

            $x = array(
                "a" => "Dhaka" ,
                "b" => "Sylhet"
            );
            $y = array(
                "c" => "Comilla" ,
                "d" => "Pavna"
            );
            var_dump($x === $y);

            $x = array(
                "a" => "Dhaka" ,
                "b" => "Sylhet"
            );
            $y = array(
                "a" => "Dhaka" ,
                "b" => "Sylhet"
            );
            var_dump($x === $y);

            $x = array(
                "a" => "Dhaka" ,
                "b" => "Sylhet"
            );
            $y = array(
                "c" => "Comilla" ,
                "d" => "Pavna"
            );
            var_dump($x !== $y);

            $x = array(
                "a" => "Dhaka" ,
                "b" => "Sylhet"
            );
            $y = array(
                "c" => "Comilla" ,
                "d" => "Pavna"
            );
            var_dump($x != $y);
            */

            $x = array(
                "a" => "Dhaka" ,
                "b" => "Sylhet"
            );
            $y = array(
                "c" => "Comilla" ,
                "d" => "Pavna"
            );
            var_dump($x <> $y);
            
        ?>
    </section>
    <section class="footeroption">
        <h2><?php echo"www.trainingwithliveproject.com"; ?></h2>
    </section>
</div>

</body>
</html>