<?php
    $fonts = "verdana";
    $bgcolor = "#F3DFDF";
    $fontcolor = "#B793C1";
    $errname = $erremail = $errwebsite = $errgender ="";
    $name = $email = $website = $comment = $gender =""; 
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                if(empty($_POST["name"])){
                    $errname = "<span style= 'color: red'>Name is required.</span>";
                }else{
                    $Name    = validate($_POST["name"]);
                }

                if(empty($_POST["email"])){
                    $erremail = "<span style= 'color: red'>E-mail is required.</span>";
                }elseif(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
                    $erremail = "<span style= 'color: red'>Invalid E-mail format.</span>";
                }else{
                    $Email   = validate($_POST["email"]);
                }

                if(empty($_POST["website"])){
                    $errwebsite = "<span style= 'color: red'>Website is requiredv.</span>";
                }elseif(!filter_var($_POST["website"], FILTER_VALIDATE_URL)){
                    $errwebsite = "<span style= 'color: red'>Invalid website format.</span>";
                }else{
                    $Website = validate($_POST["website"]);
                }

                $Comment = validate($_POST["comment"]);

                if(empty($_POST["gender"])){
                    $errgender = "<span style= 'color: red'>Gender is required.</span>";
                }else{
                    $Gender  = validate($_POST["gender"]);
                }
               
            }
            function validate($data){
                $data = trim($data);
                $data = stripcslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
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
        PHP Form Required
        <hr/>
        <br/>
        
        <form method="post" action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF']); ?>">
        <table>

            <p style= "color: red" >* Required field</p>
            <tr>
                <td>Name  </td>
                <td><input type ="text" name ="name"/>*<?php echo $errname;?></td>
            </tr>
            <tr>
                <td>Email  </td>
                <td><input type ="text" name ="email"/>*<?php echo $erremail;?></td>
            </tr>
            <tr>
                <td>Website  </td>
                <td><input type ="text" name ="website"/>*<?php echo $errwebsite;?></td>
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
                *<?php echo $errgender;?>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type ="submit" name ="Submit"/></td>
            </tr>
        </table>
        </form>

        <?php
            echo "Name : ".$Name."<br/>";
            echo "E-mail: ".$Email."<br/>";
            echo "Website : ".$Website."<br/>";
            echo "Comment : ".$Comment."<br/>";
            echo "Gender : ".$Gender;
        ?>
        
    </section>
    <section class="footeroption">
        <h2><?php echo"www.trainingwithliveproject.com"; ?></h2>
    </section>
</div>

</body>
</html>