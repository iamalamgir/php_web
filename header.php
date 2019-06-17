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

    input[type="text"]{width: 250px;}

    select{font-size: 18px; padding: 2px 5px; width: 250px;}

    .tblone{width: 420px; border: 2px solid #F3DFDF; margin: 20px 0;}
    .tblone td{padding: 5px 10px;}
    table.tblone tr:nth-child(2n+1){background: #fff; height: 30px;}
    table.tblone tr:nth-child(2n){background: #f1f1f1; height: 30px;}

    #myform{width: 400px; border:1px solid #fff; padding: 10px;}
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
        Get data from a data table in PHP
        <span style= "float:right">
            <?php
                date_default_timezone_set('Asia/Dhaka');
                echo "Time : ".date("h:i:sa")."<br/>";
            ?>
        </span>
        <hr/>