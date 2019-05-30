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
    PHP Arrays
    <hr/>

    
        <?php
            /*
            $x = array(5, 3, 9, 10, 15);
            echo $x[2];

            $x = array(5, 3, 9, 10, 15);
            echo count($x);

            $x = array(5, 3, 9, 10, 15);
            $length = count($x);
                for($i = 0; $i < $length; $i++){
                    echo $x[$i];
                    echo "<br/>";
                }

            $ages = array("Siam"=> "25", "Rana"=> "23", "Rony"=> "22");
                foreach($ages as $x => $age){
                    echo $x. ", Age =".$age;
                    echo "<br/>";
                }

            $cars = array(
               array("BMW", 15, 50),
               array("Volvo", 20, 5),
               array("Saab", 25, 30)
            );
                echo $cars[2][1];
            */

           $cars = array(
               array("BMW", 15, 50),
               array("Volvo", 20, 5),
               array("Audi", 23, 35),
               array("Saab", 25, 30)
           );
           for($row = 0; $row < 4; $row++){
               echo "<p>Row Number $row</p>";

               echo"<ul>";
               for($col = 0; $col < 3; $col++){
                   echo "<li>".$cars[$row][$col]."</li>";
               }
               echo"</ul>";
           }

        ?>
    </section>
    <section class="footeroption">
        <h2><?php echo"www.trainingwithliveproject.com"; ?></h2>
    </section>
</div>

</body>
</html>