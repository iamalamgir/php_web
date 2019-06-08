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
    PHP Superglobals [$_REQUEST & $_POST]
    <hr/>
    <br/>
        <from action = "<?php echo $_SERVER['PHP_SELF'] ?>" method = "post">
            Username: <input type = "text" name = "username"/>
            <input type = "submit" value = "Submit"/>
        </from>
   

    
        <?php
            /*
            
            */
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $name = $_POST['username'];
                if(empty($name)){
                    echo "<span style = 'color:red'>Username field must not be empty !</span>";
                }else{
                    echo "<span style = 'color:green'>You have submitted: ".$name."</span>";
                }
            }
            
            
        ?>
    </section>
    <section class="footeroption">
        <h2><?php echo"www.trainingwithliveproject.com"; ?></h2>
    </section>
</div>

</body>
</html>