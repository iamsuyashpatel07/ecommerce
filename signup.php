<!DOCTYPE html>
<html>
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
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <!--navbar opening-->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="index.html">Online Sale</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
                    <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
                    <li><a href="aboutus.html"><span class="glyphicon glyphicon-list"></span>About Us</a></li>
                    <li><a href="contactus.html"><span class="glyphicon glyphicon-phone"></span>Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!--navbar closing-->
    <!-- form opening-->
    <div class="container-fluid decor_bg">
        <div class="row">
            <div class="container">
                <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                    <h2>SIGN UP</h2>
                    <form method="get" action="signup_script.php">
                        <div class="form-group">
                            <input class="form-control" name="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="contact" placeholder="Contact">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="city" placeholder="City">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="address" placeholder="Address">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
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