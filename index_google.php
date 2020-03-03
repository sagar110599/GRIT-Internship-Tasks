<?php

//index.php
session_start();
//Include Configuration File
include('config_google.php');
include ('dbh.php');
 $sql="select * from faculty_table where email='sagardama99@gmail.com'";
$login_button='';
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
print_r( $row);


//This is for check user has login into system by using Google account, if User not login into system then it will execute if block of code and make code for display Login link for Login using Google account.


?>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>PHP Login using Google Account</title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  
 </head>
 <body>
  <div class="container">
   <br />
   <h2 align="center">LOGIN USING SOMAIYA </h2>
   <br />
   <div class="panel panel-default">
   <?php
   $login_button = '<a href="'.$google_client->createAuthUrl().'"><img src="sign-in-with-google.png" /></a>';
    echo '<div align="center">'.$login_button . '</div>';
   
   ?>
   </div>
  </div>
 </body>
</html>
