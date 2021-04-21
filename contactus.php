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
    <link rel="stylesheet" href="css/aboutus.css">
</head>

<body>
    <!--navbar opening-->
    <?php
    require ("nav.php");
    ?>
    <!--navbar closing-->
    <!-- contact us section started form here after-->
    <div class="container">
        <div style="float: left;">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, aspernatur, </br>br sequi et expedita ullam culpa obcaecati quisquam facilis assumenda exercitationem</br> cupiditate. Minima ducimus animi odit saepe quae quidem molestiae.
            </p>
            <form style="padding-top: 5% ;" method="get" action="contactus_script.php">
                <h1>Contact Us</h1>
                <div class="form-group">
                    <input type="name" name="name" class="form-control" id="exampleInputname1" placeholder="name">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                    <textarea name="message" class="form-control" rows="3" placeholder="Message..."></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div style="float: right;">
            <img src="img/E.jpg" alt="font" height="25%" width="50%">
        </div>
    </div>
    <!-- contact us closing-->
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