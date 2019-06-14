<?php 
session_start();
include 'header.php'; 
setcookie('visited', "", time() - 3600);
?>
    <section class="maincontent">
        
        <br/>
        <hr/>
        PHP Filters Advanced
        <span style= "float:right">
            <?php
                date_default_timezone_set('Asia/Dhaka');
                echo "Time : ".date("h:i:sa")."<br/>";
            ?>
        </span>
        <hr/>
        <br/>
        
            <?php
              $intnum = 300;
              $min = 1;
              $max = 200;
              if(filter_var($intnum, FILTER_VALIDATE_INT, array("options" => array("min_rang" => $min,
              "max_range" =>$max)))){
                  echo "It is valid range";
              }else{
                  echo "It is not valid range";
              }
              echo "<br/>";

              $url = "http://www.trainingwithliveproject.com";
              if(filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)){
                echo "This url is valid";
              }else{
                  echo "It has not query string";
              }
            ?>

    </section>        
<?php include 'footer.php'; ?>