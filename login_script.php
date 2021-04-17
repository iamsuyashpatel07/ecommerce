<?php
require ("connection.php");
$email = $_GET['emailcheck'];
$email = mysqli_real_escape_string($con, $email);
$password = $_GET['passwordcheck'];
$query = "SELECT email,password FROM signup WHERE email='" . $email . "' AND password='" . $password . "'";
$result = mysqli_query($con, $query)or die(mysqli_error($con));
$num = mysqli_num_rows($result);
// If the email and password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.
if ($num == 0) {
  echo "<script>window.location.assign('login.php'); </script>";
} 
else {  
  $row = mysqli_fetch_array($result);
  $_SESSION['email']=$email;
  $_SESSION['id']=mysqli_insert_id($con);
  echo "<script> window.location.assign('index.php'); </script>";
}
?>