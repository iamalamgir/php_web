<?php include 'header.php'; ?>
        <section class="maincontent">
        
            <br/>
            <hr/>
            PHP File Handling
            <span style= "float:right">
                <?php
                    date_default_timezone_set('Asia/Dhaka');
                    echo "Time : ".date("h:i:sa")."<br/>";
                ?>
            </span>
            <hr/>
            <br/>
        
            <?php
                echo readfile("text.txt");   
            ?>
            
        </section>
<?php include 'footer.php'; ?>