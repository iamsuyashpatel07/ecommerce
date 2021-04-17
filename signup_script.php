<?php
include 'connection.php';
$name=mysqli_real_escape_string($con,$_GET['name']);
$email=mysqli_real_escape_string($con,$_GET['email']);
$password=mysqli_real_escape_string($con,$_GET['password']);
$contact=mysqli_real_escape_string($con,$_GET['contact']);
$city=mysqli_real_escape_string($con,$_GET['city']);
$address=mysqli_real_escape_string($con,$_GET['address']);
$user_registration_query=" INSERT INTO signup(name,email,password,contact,city,address) VALUES ('$name','$email','$password','$contact','$city','$address')";
$user_registration_submit=mysqli_query($con,$user_registration_query) or die(mysqli_error($con));
echo "<script> window.location.assign('login.php'); </script>";
?>