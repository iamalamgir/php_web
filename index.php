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
    
    <br/>
    <br/>
    PHP Switch Statement
    <hr/>
    
        <?php
            /*
            $coding = "java";

            switch($coding){

                case "html":
                echo "I love html"; 
                break;

                case "css":
                echo "I love css";
                break;

                case "php":
                echo "I love php";
                break;

                case "java":
                echo "I love java";
                break;

                case "c#":
                echo "I love c#";
                break;

                default:
                echo "I love programming";
            }           
            */

            $coding = "java";

            switch($coding){

                case "html":
                echo "I love html"; 
                break;

                case "css":
                echo "I love css";
                break;

                case "php":
                echo "I love php";
                break;

                case "c":
                echo "I love c";
                break;

                case "c#":
                echo "I love c#";
                break;

                default:
                echo "I love programming";
            }

        ?>
    </section>
    <section class="footeroption">
        <h2><?php echo"www.trainingwithliveproject.com"; ?></h2>
    </section>
</div>

</body>
</html>