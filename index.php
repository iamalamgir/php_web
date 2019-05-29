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
            PHP Constants use
            1. Capital leter ba '_' use kora jay but '$' sine deoya nished. 
            2. define(name, value, case-insensitive(mane true ba flase value thake))
            3. variable change kora jay But constants change kora jay na,
                But constants hocche 'Gulobal' eita ek bar likhe bar bar use kora jay.         
            4. case sensitive.
            5. data base conect korlei costants kaj korbe o kaj kora buja jabe
            */

           /*
            define("VALUE", "I am learning PHP");
            echo VALUE;

            define("VALUE", "I am learning PHP", true);
            echo value;

            define("VALUE", "I am learning PHP");
            function learnPHP(){
               echo VALUE;
            }
            learnPHP();
           */

           define("VALUE", "I am learning PHP");
           function learnPHP(){
               return VALUE;
           }
           echo learnPHP();
           
        ?>
    </section>
    <section class="footeroption">
        <h2><?php echo"www.trainingwithliveproject.com"; ?></h2>
    </section>
</div>

</body>
</html>