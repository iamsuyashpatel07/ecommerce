<?php
require ("connection.php");
$password=$_GET["oldcheck"];
$new=$_GET["newcheck"];
$check=$_GET["check"];
$email= $_SESSION['email'];

if($new==$check)
{
    $update_posts = "UPDATE `signup` SET `password` = '$new' WHERE `signup`.`email` ='$email';";  
    $run_update = mysqli_query($con,$update_posts);
    session_unset();
    session_destroy(); 
    echo "<script> window.location.assign('login.php'); </script>";
}
else{
    echo "<script> window.location.assign('settings.php'); </script>";

}
?>