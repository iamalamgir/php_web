<?php include 'header.php'; ?>
    <section class="maincontent">
        
        <br/>
        <hr/>
        PHP File Create/Write
        <span style= "float:right">
            <?php
                date_default_timezone_set('Asia/Dhaka');
                echo "Time : ".date("h:i:sa")."<br/>";
            ?>
        </span>
        <hr/>
        <br/>

        <?php
            $createfile = fopen("new.txt", "w") or die("File not found !!");
            $one = "Alamgir Hossain\n";
            fwrite($createfile, $one);
            fclose($createfile);
              
        ?>
        

       
        
    </section>        
<?php include 'footer.php'; ?>