<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!--navbar opening-->
    <?php
    require ("nav.php");
    ?>
    <!--navbar closing-->
    <?php
    if (isset($_SESSION['email'])){
    $con=mysqli_connect("localhost","root","","onlinesale") or die(mysqli_error($con));
    $email=$_SESSION['email'];
    $select_query="SELECT name,price FROM products WHERE email='" . $email . "';";
    $select_query_result=mysqli_query($con,$select_query)or die(mysqli_error($con));
    ?>
      <div class="container">
         <div class="row">
            <div class="col-lg-12" style="float: left;"><h4>Product</h4></div>
            <div class="col-lg-12" style="float: right;"><h4>Price</h4></div>
         </div>
        <?php $total=0; while($row=mysqli_fetch_array($select_query_result)){ ?>
            <div class="row">
             <div class="col-lg-12" style="float: left;"><h4><?php echo $row['name'];?></h4></div>
             <div class="col-lg-12" style="float: right;"><h4><?php $total+=$row['price']; echo $row['price'];?></h4></div>
           </div>
           <?php } echo "TOTAL PRICE '$total'";} ?>
       </div>
    <?php if(!isset($_SESSION['email']))
    echo "<script> window.location.assign('login.php'); </script>"; ?>
    </body>
</html>
