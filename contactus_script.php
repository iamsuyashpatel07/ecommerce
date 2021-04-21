<?php
require ("connection.php");
$name=$_GET["name"];
$email=$_GET["email"];
$message=$_GET["message"];
$user_registration_query="INSERT into contact_us(name,email,message) values ('$name','$email','$message')";
$user_registration_submit=mysqli_query($con,$user_registration_query) or die(mysqli_error($con));
echo "<script> window.location.assign('index.php'); </script>";
?>