<?php
require "connection.php";
if(isset($_POST['sub']))
{
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$password=  mysqli_real_escape_string($con, $_POST['password']);
	$comment = mysqli_real_escape_string($con, $_POST['comment']);
  if($email !=""  && $password !="" && $comment !="")
  {
	$query="INSERT INTO contact(email,password,comment) VALUES('$email','$password','$comment')";
	$insert = mysqli_query($con,$query);
	if($insert){
	echo "
	<script>
	if(alert('comment sent'))
	{
	".header("Refresh:0.2;url=HOME1.php")."
	}
	</script>";
   }
  }
  else{
     echo "<script>alert('ALL FIELDS ARE REQUIRED')</script>";
  }

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact page</title>
    <link
    href="https://kit-pro.fontawesome.com/releases/v5.15.4/css/pro.min.css"
    rel="stylesheet"
  />
  <style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-style: normal;
}
h4{
    font-size: 1.4rem;
    text-align: center;
    color:white;
    padding-top: 2rem;
    font-style: normal;
    font-weight: 620;
}
.contact{
  background-color:  black;
  color: white;
}
.pagee{
  display: flex;
}
.message{
 font-size: medium;
 margin-left: 30px;
 font-weight: lighter;
 font-style: normal;
 font-family: Arial, Helvetica, sans-serif;
}
input[type=text],input[type=email],input[type=password]{
 width:30rem;
 margin: 10px 0;
 box-sizing:border-box;
 padding:0px 0px ;
 height:40px;
 margin-left: 30px;
 margin-right: 1px;
 border: none;
}
button{
 background-color: #FC1E1E;
 color: #e5e5e5;
 border-radius: 30px;
 width: 50%;
 height: 40px;
 padding: 10px;
 border: none;
 text-align: center;
 font-weight: bold;
 margin-left: 30px;
 margin-top: 1rem;
}
input[type=submit]  :hover{
 background-color: #FC1E1E;
}
input[type=text].subject{
 height: 10rem;
}
.formm{
margin-top: 3rem;
margin-left: 4rem;
}
.last{
  margin-top: 2rem;
  margin-left: 10rem;
}
.text5{
 margin-right: 15rem;
 font-weight: 610;
}
.me{
  width: 30%;
  height: 40%;
  border-radius: 100%;
  margin-bottom: 2rem;
}
.page{
  text-align: center;
  font-weight: bold;
  margin-bottom: 4rem;
  margin-top: 2rem;
  display: flex;
}
.icon{
    padding-left: 1.2rem;
    color: blue;
    font-size: 2rem;
}
.copyright{
  text-align: center;
  font-weight: lighter;
  margin-top: .5rem;
}
.header {
  overflow: hidden;
  background-color: #c4c4c4;
  padding: 10px 8px;
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
</style>
</head>
<body>
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
    <div class="contact">
        <div class="pagee">
            <div class="formm">
                <form class="form" id="form" method="post">
                    <label for="" class="message">Email</label></br>
                    <input type="text" name="email" id="name"></br>
                    <label for="" class="message">Password</label></br>
                    <input type="password" name="password" id="email"></br>
                    <label for="" class="message">Comment</label></br>
                    <input type="text" class="subject"  id="body" name="comment"></br>
                    <button type="submit" name="sub">Submit</button>
                    </form>
            </div>
            <div class="last">
                <img src="aliinee.jpg" alt="" class="me">
                <div class="text5">
                    Tel:+2578888888 77 <br>
                    Email:aline@gmail.com
                </div>
                <div class="page">
                    <div class="icon"><i class="fab fa-twitter"></i></div>
                    <div class="icon"><i class="fab fa-instagram"></i></div>
                    <div class="icon"><i class="fab fa-linkedin"></i></div>
                </div>
            </div>
        </div>
        <div class="copyright">
            @copyright aline
        </div>
    </div>
</body>
</html> 