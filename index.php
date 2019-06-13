<?php include 'header.php'; ?>
    <section class="maincontent">
        
        <br/>
        <hr/>
        PHP File Upload
        <span style= "float:right">
            <?php
                date_default_timezone_set('Asia/Dhaka');
                echo "Time : ".date("h:i:sa")."<br/>";
            ?>
        </span>
        <hr/>
        <br/>

        <?php
           if(isset($_FILES['image'])){
                $filename = $_FILES['image']['name'];
                $filetmp = $_FILES['image']['tmp_name'];
                move_uploaded_file($filetmp, "images/".$filename);
                echo "Image uploaded Successfully";
           }
        ?>
        <form method= "POST" action= "" enctype= "multipart/form-data ">
            <input type= "file" name= "image"/>
            <input type= "submit" Value= "Submit"/>
        </form>

    </section>        
<?php include 'footer.php'; ?>