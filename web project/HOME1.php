<?php
session_start();
if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
  header("Location:login.php");
}
?>

<html>
  <head>
   <title>AEngPS </title>
      <link rel="stylesheet" href="./HOME1.css" />
       <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"
    />

      <video autoplay muted loop id="myVideo">
        <source src="sky.mp4" type="video/mp4">
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
    <div class="welcome">
        <h2>Welcome!</h2>
        <p>We give you all services you, and repairing all Apple Mac ,iOS Products and another type of computer
             Our experienced Apple certified repair technicians in Seattle have gone through Apple’s
              rigorous training for hardware and software repairs and services. 
              With Apple’s technology and proprietary tools, our team can provide expert-level
               technical support by performing proper diagnostics, reliable repairs, and 
               fast turnaround times. We have the unique ability to offer extensive 
               support on AppleCare and out-of-warranty Apple devices.</p>
  
            <br><a href="REMOTE.php">Remote assistance</a>
            <a href="ITsupport.php">ITsupport</a>
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
  </body>
</html>
