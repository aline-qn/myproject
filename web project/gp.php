<?php
require "connect.php";
if(isset($_POST['sub']))
{
	$names = mysqli_real_escape_string($con, $_POST['names']);
	$phone =  mysqli_real_escape_string($con, $_POST['phone']);
	$email =  mysqli_real_escape_string($con, $_POST['email']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
   $query="INSERT INTO signup(names,p_number,email, password) VALUES('$names','$phone','$email','$password')";
   $insert = mysqli_query($con,$query);
//if($insert){
 // echo 'appointment made successfully!';
 //}else{
      //echo'appointment failed'.mysqli_error($con);
  // }
}
?>
