<?php 
session_start();
include 'header.php'; 
setcookie('visited', "", time() - 3600);
?>
    <section class="maincontent">
        
        <br/>
        <hr/>
        PHP array() Function - array_column()
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
                $name = array(
                            array( 
                            'id'         => '200',
                            'first_name' => 'Alamgir',
                            'last_name'  => 'Hossain'
                            ),

                            array( 
                                'id'         => '201',
                                'first_name' => 'Imran',
                                'last_name'  => 'Khan'
                            ),

                            array( 
                                'id'         => '202',
                                'first_name' => 'Siam',
                                'last_name'  => 'Hasan'
                            ),
                        );
                $firstname = array_column($name, 'first_name');        
                print("<pre>");
                print_r($firstname);
                print("</pre>");
                */

                $name = array(
                            array( 
                            'id'         => '200',
                            'first_name' => 'Alamgir',
                            'last_name'  => 'Hossain'
                            ),

                            array( 
                                'id'         => '201',
                                'first_name' => 'Imran',
                                'last_name'  => 'Khan'
                            ),

                            array( 
                                'id'         => '202',
                                'first_name' => 'Siam',
                                'last_name'  => 'Hasan'
                            ),
                        );
                $firstname = array_column($name, 'first_name', 'id');        
                print("<pre>");
                print_r($firstname);
                print("</pre>");
                
            ?>
            
    </section>        
<?php include 'footer.php'; ?>