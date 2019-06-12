<?php include 'header.php'; ?>
    <section class="maincontent">
        
        <br/>
        <hr/>
        PHP File Open/Read/Close
        <span style= "float:right">
            <?php
                date_default_timezone_set('Asia/Dhaka');
                echo "Time : ".date("h:i:sa")."<br/>";
            ?>
        </span>
        <hr/>
        <br/>

        <?php
            $ourfile = fopen("text.txt", "r") or die("File not found !!");
            echo fread($ourfile,filesize("text.txt"));
            fclose($ourfile);
            echo "<br/>";
            echo "<br/>";  
        ?>

        <?php
            $ourfile = fopen("text.txt", "r") or die("File not found !!");
            echo fgets($ourfile,filesize("text.txt"));
            fclose($ourfile);
            echo "<br/>";
            echo "<br/>";   
        ?>

        <?php
            $ourfile = fopen("text.txt", "r") or die("File not found !!");
            echo fgetc($ourfile);
            fclose($ourfile);
            echo "<br/>";
            echo "<br/>";   
        ?>

        <?php
            $ourfile = fopen("text.txt", "r") or die("File not found !!");
            while(!feof($ourfile)){
                echo fgets($ourfile)."<br/>";
            }
            fclose($ourfile);
            echo "<br/>";
            echo "<br/>";   
        ?>

        <?php
            $ourfile = fopen("text.txt", "r") or die("File not found !!");
            while(!feof($ourfile)){
                echo fgetc($ourfile)."<br/>";
            }
            fclose($ourfile);
            echo "<br/>";
            echo "<br/>";   
        ?>
        
    </section>        
<?php include 'footer.php'; ?>