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
    04. Increment/Decrement Operators ( ++, -- )
    <hr/>
    
        <?php
            /*
            *pre increment '++5' mane variable er agei jog sine deoya And
                tar mane main value er sathe 1jog hoye echo hobe.

            *pre decrement '--5' mane variable er agei biog sine deoya And
                tar mane main value er sathe 1biog hoye echo hobe.

            *post increment '5++' mane variable er pore jog sine deoya And 
                ekhane ager main value ta echo kore tar por main value
                er sathe 1jog hoye second value ta echo hoy.

            *post decrement '5--' mane variable er pore biog sine deoya And 
                ekhane ager main value ta echo kore tar por main value
                er sathe 1biog hoye second value ta echo hoy.
            

            $x = 5;
            echo ++$x;

            $x = 5;
            echo --$x;

            $x = 5;
            echo $x++;
            echo "<br/>";
            echo $x;

            */

            $x = 5;
            echo $x--;
            echo "<br/>";
            echo $x;
            
        ?>
    </section>
    <section class="footeroption">
        <h2><?php echo"www.trainingwithliveproject.com"; ?></h2>
    </section>
</div>

</body>
</html>