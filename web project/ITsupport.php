<?php
require "connection.php";
if(isset($_POST['sub']))
{
	$names = mysqli_real_escape_string($con, $_POST['names']);
	$email =  mysqli_real_escape_string($con, $_POST['email']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$comment =  mysqli_real_escape_string($con, $_POST['comments']);
 if($names !="" && $email !="" && $password !="" && $comment !=""){
   $query="INSERT INTO submit(names,email, password,comment) VALUES('$names','$email','$password','$comment')";
   $insert = mysqli_query($con,$query);
  
	$result=mysqli_query($con,"SELECT * FROM submit");
	while($row=mysqli_fetch_array($result)){
		echo $row['id']."";
		echo $row['names']."";
		echo $row['email']."";
		echo $row['password']."";
		echo $row['comment']."";
		echo "</br>";
	}
   
}
else{
	echo "<script>alert('ALL FIELDS ARE REQUIRED')</script>";
}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
  		   padding: 20px 10px;
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
			border-radius: 10px;
			width: 500px;
			margin: auto;
			margin-top: 30px;
			margin-bottom: 30px;
			text-align: center;
			background: rgba(43, 192, 233,0.5);
			box-shadow: 0 0 6px 0 rgb(43, 192, 233);
		}

		input, textarea{
			font-size: 20px;
			width: 400px;
			padding: 10px;
			margin: 10px;
			border-radius: 5px;
			border: none;
			background: whitesmoke;
		}

		::placeholder{
			color: gray;
		}
		.btn{
			background: rgb(43, 192, 233);
			border: 1px solid rgb(43, 192, 233);
			width: 100px;
		}
		.btn:hover{
			background: transparent;
			border: 1px solid rgb(43, 192, 233);
			color: rgb(43, 192, 233);
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
	
	}
	</style>
</head>
<body>
	<!-- <video autoplay muted loop id="myVideo"> -->
  <!-- <source src="rain.mp4" type="video/mp4"> -->
</video>
<div class="content">
	<div class="header">
        <a href="#" class="logo"><img src="logo.jpeg">AEngPS<br> COMPUTER REPAIR</a>
        <div class="header-right">
           <a href="HOME1.php">HOME</a>
           <a href="about.php">ABOUT US</a>
           <a href="ITsupport.php">ITSUPPORT</a>
           <a href="contact.php">CONTACT</a>
           <a href="REMOTE.php">REMOTE ASSISTANCE</a>
           <a href="login.php">LOGIN</a>
        </div>
    </div>


	<div class="form">
		<form  method="post">
			<input type="text" placeholder="Enter your name" name="names"><br>
			<input type="email" placeholder="Enter your Email" name="email"><br>
			<input type="password" placeholder="Enter your Password" name="password"><br>
			<textarea rows="3" cols="40" placeholder="Describe your Problem..." name="comments"></textarea><br>
			<input type="submit" value="Submit" name="sub" class="btn">
		</form>
	</div>
	
	<footer>
		<div>
			<h2>Contact</h2>
			<p><img src="call1.png">+250789620539</p>
			<p><img src="email.webp">AEngPS@gmail.com</p>
			<p>Copyright ©2022 by AEngPS .All rights reserved</p>
		</div>
	</footer>
</div>
</body>
</html>