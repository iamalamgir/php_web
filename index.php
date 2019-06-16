<?php 
session_start();
include 'header.php'; 
setcookie('visited', "", time() - 3600);
?>
    <section class="maincontent">
        
        <br/>
        <hr/>
        PHP array() Function - array_search 
        <span style= "float:right">
            <?php
                date_default_timezone_set('Asia/Dhaka');
                echo "Time : ".date("h:i:sa")."<br/>";
            ?>
        </span>
        <hr/>
        <br/>
        
            <?php
                /*
                
                */

                $color_one = array("a"=>"red", "b"=>"blue", "c"=>"orange", "d"=>"skyblue", "e"=>"green", "f"=>"yellow");
                if(isset($_POST['text'])){
                    global $text;
                    $txt = $_POST['text'];
                    $result = array_search($txt, $color_one);
                    echo "You have search by => $txt and your key is => $result";
                }
               
            ?>
            <form action="index.php" method="post">
                <input type="text" name="text" value="<?php global $txt; echo $txt; ?>"/>
                <input type="submit" name="Submit"/>
            </form>
            
    </section>        
<?php include 'footer.php'; ?>