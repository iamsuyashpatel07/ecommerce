<div class="navbar navbar-default">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Online Sale</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                <?php
                if (isset($_SESSION['email'])) {
                    ?>
                    <li><a href = "signup.php"><span class = "glyphicon glyphicon-user"></span>Cart</a></li>
                    <li><a href = "login.php"><span class = "glyphicon glyphicon-user"></span>Settings</a></li>
                    <li><a href = "logout.php"><span class = "glyphicon glyphicon-log-in"></span>Logout</a></li>
                    <li><a href = "contactus.php"><span class = "glyphicon glyphicon-log-in"></span>Contact Us</a></li>
                    ?>
                    <?php
                } else {
                    ?>
                   <li><a href = "signup.php"><span class = "glyphicon glyphicon-user"></span>Sign Up</a></li>
                    <li><a href = "login.php"><span class = "glyphicon glyphicon-user"></span>Login</a></li>
                    <li><a href = "aboutus.php"><span class = "glyphicon glyphicon-log-in"></span>About Us</a></li>
                    <li><a href = "contactus.php"><span class = "glyphicon glyphicon-log-in"></span>Contact Us</a></li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
</div>