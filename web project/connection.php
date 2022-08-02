<?php
$server="localhost";
$db="repair";
$user="root";
$password="";
$con=mysqli_connect($server,$user,$password,$db);//return true or false
if(!$con){
    echo "connection error".mysqli_error($con);
}
?>