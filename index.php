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
    PHP Form Validation
    <hr/>
    <br/>
        
        <form method="post" action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF']); ?>">
        <table>
            <tr>
                <td>Name  </td>
                <td><input type ="text" name ="name" required/></td>
            </tr>
            <tr>
                <td>Email  </td>
                <td><input type ="text" name ="email"/></td>
            </tr>
            <tr>
                <td>Website  </td>
                <td><input type ="text" name ="website"/></td>
            </tr>
            <tr>
                <td>Comment  </td>
                <td><textarea name ="comment" rows ="5" cols ="40"></textarea></td>
            </tr>
            <tr>
                <td>Gender </td>
                <td>
                <input type ="radio" name ="gender" value ="femail"/>Femail
                <input type ="radio" name ="gender" value ="mail"/>Mail
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type ="submit" name ="Submit"/></td>
            </tr>
        </table>
        </form>
        
        <?php
           
            $name = $email = $website = $comment = $gender =""; 
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $Name    = validate($_POST["name"]);
                $Email   = validate($_POST["email"]);
                $Website = validate($_POST["website"]);
                $Comment = validate($_POST["comment"]);
                $Gender  = validate($_POST["gender"]);

                
                echo "Name : ".$Name."<br/>";
                echo "E-mail: ".$Email."<br/>";
                echo "Website : ".$Website."<br/>";
                echo "Comment : ".$Comment."<br/>";
                echo "Gender : ".$Gender;
               
            }
            function validate($data){
                $data = trim($data);
                $data = stripcslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            
            
        ?>
    </section>
    <section class="footeroption">
        <h2><?php echo"www.trainingwithliveproject.com"; ?></h2>
    </section>
</div>

</body>
</html>