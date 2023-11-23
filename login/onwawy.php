<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://kit.fontawesome.com/8c01303568.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="onway_c.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <div class="notch">
        <div class="image">
            <a href="front.html"><img src="Healthsos.png" width="200" height="80" style="margin: 15px 10px"></a></div>
            <div class="top">
                <ul>
                    <li><a href=""><b>HOME</b></a></li>
                    <li><a href=""><b>ABOUT</b></a></li>
                    <li><a href=""><b>CONTACT</b></a></li>
                </ul>
            </div>
            <div class="box"><a href="" ><b>SIGNUP/LOGIN</b></a></div>
        </div>
        <div class="header">
        <div class="text">
           <h1>Ambulance Is On The Way to <?php echo $user_data['location']; ?></h1>
           <img src="ambul.gif">
        </div></div>
        </body>
        </html>