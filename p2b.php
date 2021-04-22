<?php 
               if(isset($_GET['h10'])){
               require "connection.php";
               $email=$_SESSION['email'];
               $user_registration_query="INSERT INTO `products` (`products_id`, `name`, `email`, `price`) VALUES ('1', 'earphone', '$email', '900');";
               $user_registration_submit=mysqli_query($con,$user_registration_query) or die(mysqli_error($con));
               echo "<script>window.location.assign('cart.php'); </script>";
            }
?>