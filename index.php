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
    PHP Sorting Arrays
    <hr/>

    
        <?php
            /*
            $name = array("Rana", "Siam", "Hasive", "Mahin", "Alamgir");
            sort($name);
            
            for($i = 0; $i < 5; $i++){
                echo $name[$i];
                echo "<br/>";
            }

            $name = array("Rana", "Siam", "Hasive", "Mahin", "Alamgir");
            sort($name);
            $length = count($name);
            
            for($i = 0; $i < $length; $i++){
                echo $name[$i];
                echo "<br/>";
            }

            $name = array("Rana", "Siam", "Hasive", "Mahin", "Alamgir");
            rsort($name);
            $length = count($name);
            
            for($i = 0; $i < $length; $i++){
                echo $name[$i];
                echo "<br/>";
            }

            $name = array(30, 5, 100, 20, 50);
            sort($name);
            $length = count($name);
            
            for($i = 0; $i < $length; $i++){
                echo $name[$i];
                echo "<br/>";
            }

            $name = array(30, 5, 100, 20, 50);
            rsort($name);
            $length = count($name);
            
            for($i = 0; $i < $length; $i++){
                echo $name[$i];
                echo "<br/>";
            }

            $age = array("Rana"=>"20", "Siam"=>"25", "Hasive"=>"15", "Mahin"=>"40", "Alamgir"=>"60");
            asort($age);
            
            foreach($age as $key => $value){
                echo "Key = ".$key." Value = ".$value;
                echo "<br/>";
            }
            
            */

            $age = array("Rana"=>"20", "Siam"=>"25", "Hasive"=>"15", "Mahin"=>"40", "Alamgir"=>"60");
            ksort($age);
            
            foreach($age as $key => $value){
                echo "Key = ".$key." Value = ".$value;
                echo "<br/>";
            }
        ?>
    </section>
    <section class="footeroption">
        <h2><?php echo"www.trainingwithliveproject.com"; ?></h2>
    </section>
</div>

</body>
</html>