<?php
session_start();
require "connection.php";
//checking if form has been posted
//if($_SERVER["REQUEST_METHOD"] ==="POST")
if(isset($_POST['sub']))
{
	$email=$_POST["email"];
	$password=$_POST["password"];
	if($email !="" && $password !=""){
	$sql="SELECT * FROM signup WHERE email='$email' AND password='$password'";
	$result=mysqli_query($con,$sql);
	$user=array();
    if(mysqli_fetch_array($result) != $user)
	{
	        $_SESSION["email"]=$_POST['email'];
			$_SESSION["password"]=$_POST['password'];
			header("Location:REMOTE.php");
     }}
    else{
	echo "
	<script> 
	if(alert('Wrong Email or password click ok to renter'))
	{
	".header("Refresh:0.1;url=login.php")."		
    }
	</script>";
  
}
}
?>


<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
	<title>IT Support</title>
	<style>
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: serif;
		}
		.header {
  		   overflow: hidden;
  		   background-color: #c4c4c4;
  		   padding: 10px 10px;
		   position: relative;
		}
		.header a {
 		    float: left;
 		    color: white;
  		    text-align: center;
		    padding: 12px;
  		    text-decoration: none;
 		    font-size: 18px;
 		    line-height: 25px;
 		    border-radius: 4px;
		}
		.header a.logo {
 		    font-size: 25px;
  		    font-weight: bold;
		}
		.header a:hover {
 		    background-color: #ddd;
 		    color: black;
		}
		.header-right {
 	       float: right;
	   }
	   a img{
	   	width: 40px;
	   	border-radius: 50%;
	   }

		.form{
			padding: 10px;
            padding-top: 75px;
            padding-bottom: 75px;
			border-radius: 10px;
			width: 500px;
			margin: auto;
			margin-top: 30px;
			margin-bottom: 30px;
			text-align: center;
			background: rgba(19, 10, 24, 0.555);
			box-shadow: 0 0 6px 0 rgba(85, 83, 85, 0.726);
		}

		input, textarea{
			font-size: 20px;
			width: 400px;
			padding: 10px;
			margin: 10px;
			border-radius: 15px;
			border: none;
			background: whitesmoke;
		}

		::placeholder{
			color: gray;
		}
		.btn{
			background: rgb(49, 11, 92);
			border: 1px solid rgb(49, 11, 92);
			width: 100px;
            color:white;
			display: inline-block;
		}
		.btn:hover{
			background: transparent;
			border: 1px solid rgb(49, 11, 92);
			color: white;
		}
		p img{
			width: 25px;
			border-radius: 50%;
			border: 1px solid white;
			padding: 2px;
		}
		footer {
			padding: 10px;
			left: 0;
 		   bottom: 0;
 		   width: 100%;
 		   background-color: rgb(43, 192, 233);
  		   color: white;
     	   text-align: center;
		}
		#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%;
  min-height: 100%;
}
.content{
	width: 100%;
	background: #345f6494;
	position: fixed;
	}
	.form a{
		color:white;
		text-decoration: none;
		font: size 10px;
	}
	.form a:hover{
		color: blue;
	}
	</style>
</head>
<body>
<!--<video autoplay muted loop id='myVideo'>-->
 <!--<source src='rain.mp4' type='video/mp4'>-->
</video>
<div class='content'>
	<div class='header'>
        <a href="#" class="logo"><img src="logo.jpeg">AEngPS<br> COMPUTER REPAIR</a>
        <div class='header-right'>
           <a href='HOME1.php'>HOME</a>
           <a href="about.php">ABOUT US</a>
           <a href="ITsupport.php">ITSUPPORT</a>
           <a href="contact.php">CONTACT</a>
           <a href="REMOTE.php">REMOTE ASSISTANCE</a>
           <a href="login.php">LOGIN</a>
        </div>
    </div>


	<div class='form'>
		<form method="post">

			<input type="email" placeholder="Enter your Email" name="email"><br>
			<input type="password" placeholder="Enter your Password" name="password"><br>
		
			<input type="submit" value="login" name="sub" class="btn">
			<a href="sign.php">sign up</a>

		</form>
	</div>
	<footer>
		<div>
			<h2>Contact</h2>
			<p><img src="call1.png">+250789620539</p>
			<p><img src="email.webp">AEngPS@gmail.com</p>
			<p>Copyright ©2022 by AEngPS .All rights reseraved</p>
		</div>
	</footer>
</div>
</body>
</html>