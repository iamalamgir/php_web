<?php
    $fonts = "verdana";
    $bgcolor = "#F3DFDF";
    $fontcolor = "#B793C1";
?>

<!doctype html>
<html>
<head>
    <title>PHP Syntax</title>
    <style>
    .body{font-family:<?php echo $fonts;?>}

    .phpcoding{width: 900px; margin: 0 auto; background:<?php echo"#DDF9DB" ?>;}

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
    <hr/>
    PHP Variable Scope
    <hr/>

    
        <?php
            /*
            function test1(){
                $a = 5;
                echo $a;
            }
            test1();

            function test1(){
                $a = 5;
                echo $a;
                echo "<br/>";
            }
            function test2(){
                $b = 10;
                echo $b;
            }
            test1();
            test2();
            
            */
            $x = 15;
            function test1(){
                global $x;
                $a = 5;
                echo $a;
                echo "<br/>";
                echo "Access from function test1 ".$x;
                echo "<br/>";
            }
            function test2(){
                global $x;
                $b = 10;
                echo $b;
                echo "<br/>";
                echo "Access from function test2 ".$x;
            }
            test1();
            test2();
            
        ?>
    </section>
    <section class="footeroption">
        <h2><?php echo"www.trainingwithliveproject.com"; ?></h2>
    </section>
</div>

</body>
</html>