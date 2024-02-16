
<?php
            $servername="localhost";
            $username="root";
            $password="";
            $db="OV";
            $connect=mysqli_connect($servername,$username,$password,$db);
            if (isset($_POST['s1']))  
            {
                $email=$_POST['e1'];
                $pwd=$_POST['p1'];

                if (!empty($_POST['e1']) && !empty($_POST['p1'])) 
                {
                
                
                
                $insert="INSERT INTO `login_info`(`L_id`,`L_email`,`L_pwd`) VALUES('','$email','$pwd')";
                $result=mysqli_query($connect,$insert);
                if($result)
                {
                        echo "<br>";
                        echo "<h3 style='font-family:cursive'>&nbsp&nbspThank You&nbsp <u>".$_POST['e1']."</u>&nbsp for Login In Our Website</h3>";
                        ?>
                        <!DOCTYPE html>
                        <html>
                        <head>
                            <meta charset="utf-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1">
                            <title></title>
                        </head>
                        <body style="background-image:linear-gradient(yellow,orange,red); border: 5px dotted black;">
                            <br>
                            <br>
                                <center><p style="text-align: center;
                                background-color: grey; 
                                color: beige;
                                border-radius: 15px;
                                box-shadow: 5px 8px 7px lavender;
                                font-family: cursive;

                                ">
                                Currently This Website Is Under Maintenance<br> Further <b>Updates</b>
                                 Are <u>Comming Soon..</u></p></center>
                                 <footer style="padding-top: 260px; text-align:center; font-family: courier;">About &copy VanjaniOm</footer>
                        </body>
                        </html>
                    <?php   
                    
                }
                else
                {
                    echo "Not Done";
                }


            }
            else
            {
                echo "<center><h2><i>I Know  That You Are Oversmart&nbsp 🤪🤪</i>&nbsp&nbsp<b><br>Please Enter Email Address and password For Login</b></h2></center>";
            }
            
        }




?>