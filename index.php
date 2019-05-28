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
    
    
        <?php
           /*
           $x = "PHP string";
           echo strlen($x);
           
           $y = "PHP is nice";
           echo str_word_count($y);

           $x = "PHP is nice";
           echo strrev($x);

           $x = "PHP is nice";
           echo strpos($x, "nice");
           */

           $x = "PHP is nice";
           echo str_replace("PHP", "JAVA", $x);
           
        ?>
    </section>
    <section class="footeroption">
        <h2><?php echo"www.trainingwithliveproject.com"; ?></h2>
    </section>
</div>

</body>
</html>