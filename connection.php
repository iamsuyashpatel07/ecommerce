<?php
if(!isset($_SESSION['email'])){
 $con= mysqli_connect("localhost","root","","onlinesale") or die(mysqli_error($con));
 $_SESSION['email']=$email;
 $_SESSION['id']=mysqli_insert_id($con);
}
else{
    $con=mysqli_connect("localhost","root","","onlinesale") or die(mysqli_error($con));
}
?>
