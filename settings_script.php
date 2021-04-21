<?php
require ("connection.php");
$password=$_GET["oldcheck"];
$new=$_GET["newcheck"];
$check=$_GET["check"];
$id=$_SESSION['id'];
if($new==$check)
{
    $update_posts = "UPDATE signup SET passsword='".$new."' WHERE signup.id='".$id."'";  
    $run_update = mysqli_query($con,$update_posts);
    session_unset();
    session_destroy(); 
    echo "<script> window.location.assign('login.php'); </script>";
}
else{
    echo "<script> window.location.assign('settings.php'); </script>";

}
?>