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
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!--navbar opening-->
    <?php
    require ("nav.php");
    ?>
    <!--navbar closing-->
    <!-- content of image-->
    <?php if (!isset($_SESSION['email'])) :?>
    <div id="background-image">
        <center>
            <div id="content">
                <h1>We sell Technical Products</h1>
                <h3>Flat 40% OFF on premium products</h3>
                <button class="btn btn-danger">Shop Now</button>
            </div>
        </center>
    </div>
    <!--thumbnail opening-->
    <div class="container" id="thumbnail-margin">
        <div class="row text-center">
            <div class="col-sm-4">
                <a href="login.php">
                    <div class="thumbnail">
                        <img src="img/B.jpg" alt="natue">
                        <div class="caption">
                            <h3>Watches</h3>
                            <p>Original watches from the best brands.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-4">
                <a href="login.php">
                    <div class="thumbnail">
                        <img src="img/B.jpg" alt="techno">
                        <div class="caption">
                            <h3>Watches</h3>
                            <p>Original watches from the best brands.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-4">
                <a href="login.php">
                    <div class="thumbnail">
                        <img src="img/C.jpg" alt="logy">
                        <div class="caption">
                            <h3>Shirts</h3>
                            <p>Our exquisite collection of shirts.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <?php else : ?>
    <!-- first row-->
    <div class="container" id="thumbnail-margin">
        <div class="row text-center">
            <div class="col-sm-4">
                <a href="#">
                    <div class="thumbnail">
                        <img src="img/B.jpg" alt="natue">
                        <div class="caption">
                        <p><a href="login.php" role="button" class="btn btn-primary "> Buy Now</a></p>
                        <p><a href="login.php" role="button" class="btn btn-danger"> Add to cart</a></p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="#">
                    <div class="thumbnail">
                        <img src="img/B.jpg" alt="techno">
                        <div class="caption">
                        <p><a href="login.php" role="button" class="btn btn-primary "> Buy Now</a></p>
                        <p><a href="login.php" role="button" class="btn btn-danger"> Add to cart</a></p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-4">
                <a href="#">
                    <div class="thumbnail">
                        <img src="img/C.jpg" alt="logy">
                        <div class="caption">
                        <p><a href="login.php" role="button" class="btn btn-primary "> Buy Now</a></p>
                        <p><a href="login.php" role="button" class="btn btn-danger"> Add to cart</a></p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- 2nd row -->
    <div class="container" id="thumbnail-margin">
        <div class="row text-center">
            <div class="col-sm-4">
                <a href="#">
                    <div class="thumbnail">
                        <img src="img/B.jpg" alt="natue">
                        <div class="caption">
                        <p><a href="login.php" role="button" class="btn btn-primary "> Buy Now</a></p>
                        <p><a href="login.php" role="button" class="btn btn-danger"> Add to cart</a></p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-4">
                <a href="#">
                    <div class="thumbnail">
                        <img src="img/B.jpg" alt="techno">
                        <div class="caption">
                        <p><a href="login.php" role="button" class="btn btn-primary "> Buy Now</a></p>
                        <p><a href="login.php" role="button" class="btn btn-danger"> Add to cart</a></p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-4">
                <a href="#">
                    <div class="thumbnail">
                        <img src="img/C.jpg" alt="logy">
                        <div class="caption">
                        <p><a href="login.php" role="button" class="btn btn-primary "> Buy Now</a></p>
                        <p><a href="login.php" role="button" class="btn btn-danger"> Add to cart</a></p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!--3 row-->
    <div class="container" id="thumbnail-margin">
        <div class="row text-center">
            <div class="col-sm-4">
                <a href="#">
                    <div class="thumbnail">
                        <img src="img/B.jpg" alt="natue">
                        <div class="caption">
                        <p><a href="login.php" role="button" class="btn btn-primary "> Buy Now</a></p>
                        <p><a href="login.php" role="button" class="btn btn-danger"> Add to cart</a></p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-4">
                <a href="#">
                    <div class="thumbnail">
                        <img src="img/B.jpg" alt="techno">
                        <div class="caption">
                        <p><a href="login.php" role="button" class="btn btn-primary "> Buy Now</a></p>
                        <p><a href="login.php" role="button" class="btn btn-danger"> Add to cart</a></p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-4">
                <a href="#">
                    <div class="thumbnail">
                        <img src="img/C.jpg" alt="logy">
                        <div class="caption">
                        <p><a href="login.php" role="button" class="btn btn-primary "> Buy Now</a></p>
                        <p><a href="login.php" role="button" class="btn btn-danger"> Add to cart</a></p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
        <?php endif; ?>
    <!--thumbnail closing-->
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