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
    
    PHP Supergolbals
    <hr/>
    01. $GLOBALS <br/>
    02. $_SERVER <br/>
    03. $_REQUEST <br/>
    04. $_POST <br/>
    05. $_GET <br/>
    06. $_FILES <br/>
    07. $_ENV <br/>
    08. $_COOKIE <br/>
    09. $_SESSION <br/>
    10. $php_errormsg <br/>
    11. $HTTP_RAW_POST_DATA <br/>
    12. $http_response_header
    <hr/>
    <br/>
    01. $GLOBALS 
    <hr/>
    <br/>

    
        <?php
            /*
           
            */
            $x = 5;
            $y = 10;
            function sum(){
                $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
            }
            sum();
            echo $z;
            
            
        ?>
    </section>
    <section class="footeroption">
        <h2><?php echo"www.trainingwithliveproject.com"; ?></h2>
    </section>
</div>

</body>
</html>