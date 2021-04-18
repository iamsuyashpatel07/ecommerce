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
    <!-- form opening-->
    <?php
    if (!isset($_SESSION['email'])):  ?>
    <div class="container-fluid decor_bg">
        <div class="row">
            <div class="container">
                <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                    <h2>Login</h2>
                    <form method="get" action="login_script.php">
                        <div class="form-group">
                            <input type="email" name="emailcheck" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" name="passwordcheck" class="form-control" placeholder="Password">
                        </div>
                        <p>Don't have an account?<a href="signup.php"> Sign up</a></p>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php else: ?>
    <center><b>FIRST Logout</b></center>
    <?php endif; ?>
    <!-- form closing-->
    <!-- footer opening-->
    <footer>
        <!-- FOOTER START -->
        <div class="footer" style="margin-top: 50px;">
            <div class="contain">
                <div class="col" style="margin-right: 20%;">
                    <h1>Information</h1>
                    <ul>
                        <li>About Us</li>
                        <li>Contact Us</li>
                    </ul>
                </div>
                <div class="col" style="margin-right: 20%;">
                    <h1>My Account</h1>
                    <ul>
                        <li>Login</li>
                        <li>Sign Up</li>
                    </ul>
                </div>
                <div class="col">
                    <h1>Support</h1>
                    <ul>
                        <li>Contact us:+91 7523901029</li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- END OF FOOTER -->
    </footer>

    <!--footer closing-->


</body>

</html>