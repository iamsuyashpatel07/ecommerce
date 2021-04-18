<?php
session_start();
if (isset($_SESSION['email'])){ 
session_unset();
session_destroy(); 
echo "<script> window.location.assign('index.php'); </script>";
}
else{
    echo "<script> window.location.assign('login.php'); </script>";
}
?>