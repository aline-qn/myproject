<?php
session_start();
if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
  header("Location:login.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Read More</title>
        <style>
                                   *{
                        margin: 0;
                        padding: 0;
                        left: 0;
                        right: 0;
                        bottom:0;
                       }
                       
                       body{
                        color: white;
                        font-family: Arial, Helvetica, sans-serif;
                        margin: 0;
                        padding: 0;
                       }
                       .first{
                            background: url(read1.PNG);
                            background-size: cover;
                            box-sizing: border-box;
                            height: 20rem;
                            text-align: center;
                            padding-top: 3rem;
                        }   
                        .first h1{
                            font-size: 5rem;
                            font-style: italic;
                            font-weight: bold;
                        }
                        .first h2{
                            font-size: medium;
                            padding-left: 5rem;
                            padding-top: 1rem;
                        }
                        .second{
                            background-color:rgb(49, 41, 41);
                            box-sizing: border-box;
                            display: flex;
                            text-align: center;
                           color: white;
                        }  
                        .third{
                            background-color: black;
                            box-sizing: border-box;
                            display: flex;
                        }     
                        .p1{
                            padding: 7rem;
                        }                                           
                        .card1,.card2{
                            padding-right: 2rem;
                            padding-top: 2rem;
                            padding-bottom: 2rem;
                        }
                        .card1{
                            padding-left: 6rem;
                        }
                        .m{
                            text-align: center;
                            padding-top: .5rem;
                            padding-bottom: .5rem;
                        }
                        h3{
                            font-size: .8rem;
                            color: blue;
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
footer {
  padding: 10px;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: rgb(43, 192, 233);
  color: white;
  text-align: center;
  padding-top: 20px;
  /* padding-bottom:1rem; */
}
p img{
  width: 25px;
  border-radius: 50%;
  border: 1px solid white;
  padding: 2px;
}
footer p{
  margin:1px;
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
    <div class="navigation">
       <div class="second">
           <img src="iphone.jpeg" alt="">
          <p class="p1">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad quibusdam temporibus distinctio, excepturi nobis, sapiente hic tempora ab suscipit deserunt ullam labore rem natus voluptas doloremque! Explicabo numquam quia earum.
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae obcaecati deserunt aliquam doloremque, soluta a asperiores animi similique consequatur! Assumenda magnam voluptate sint commodi pariatur deleniti laudantium hic vel incidunt.
           </p>
           <a href="HOME1.php"><button type="submit" nam="sub">logout</button></a>
       </div>
      
    <footer>
      <div>
        <h2>Contact</h2>
        <p><img src="call1.png">+250789620539</p>
        <p><img src="email.webp">AEngPS@gmail.com</p>
        <p>Copyright © 2022 by AEngPS .All rights reserved</p>
      </div>
    </footer>

    </div>
    <div class="card4">
        <div class="m">@copyright aline</div>
    </div>
</body>
</html>



