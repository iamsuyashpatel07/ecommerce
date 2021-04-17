<?php
$con=mysqli_connect("localhost","root","","onlinesale") or die(mysqli_error($con));
if(!isset($_SESSION['email'])){
$_SESSION['email']=$email;
$_SESSION['id']=mysqli_insert_id($con);
}
else{
$con=mysqli_connect("localhost","root","","onlinesale") or die(mysqli_error($con));
}
?>
