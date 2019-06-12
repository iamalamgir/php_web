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

    p{margin: 0;}
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
            PHP Date and Time
            <span style= "float:right">
                <?php
                    date_default_timezone_set('Asia/Dhaka');
                    echo "Time : ".date("h:i:sa")."<br/>";
                ?>
            </span>
            <hr/>
            <br/>
        
            <?php
                echo "Toda is ".date("d-m-Y")."<br/>";

                echo "Toda is ".date("d/m/y")."<br/>";

                echo "Toda is ".date("d.m.y")."<br/>";

                echo "Toda is ".date("l")."<br/>";

                echo "Default Time is ".date("h:i:sa")."<br/>";

                date_default_timezone_set('Asia/Dhaka');
                echo "Bangladesh Time is ".date("h:i:sa")."<br/>";

                echo date_default_timezone_get()."<br/>";  
            ?>
            
        </section>
        <section class="footeroption">
            <p>&copy; <?php echo date("Y"); ?> Training with live project</p>
            <h2><?php echo"www.trainingwithliveproject.com"; ?></h2>
        </section>
    </div>

</body>
</html>