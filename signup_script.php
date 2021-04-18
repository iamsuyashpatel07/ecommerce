<?php
require ("connection.php");
$name=$_GET["name"];
$email=$_GET["email"];
$password=$_GET["password"];
$contact=$_GET["contact"];
$city=$_GET["city"];
$address=$_GET["address"];
$user_registration_query="INSERT into signup(name,email,password,contact,city,address) values ('$name','$email','$password','$contact','$city','$address')";
$user_registration_submit=mysqli_query($con,$user_registration_query) or die(mysqli_error($con));
echo "<script> window.location.assign('login.php'); </script>";
?>