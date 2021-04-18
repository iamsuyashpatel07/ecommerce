<div class="navbar navbar-default">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Online Sale</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <?php if (isset($_SESSION['email'])) :?>
                    <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart</a></li>;
                    <li><a href = "setting.php"><span class = "glyphicon glyphicon-cog"></span >Settings</a></li>
                    <li><a href = "logout.php"><span class = "glyphicon glyphicon-off"></span> Logout</a></li>
                    <li><a href = "contactus.php"><span class = "glyphicon glyphicon-phone"></span> Contact Us</a></li>
                <?php else : ?>
                   <li><a href = "signup.php"><span class = "glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href = "login.php"><span class = "glyphicon glyphicon-log-in"></span> Login</a></li>
                    <li><a href = "aboutus.php"><span class = "glyphicon glyphicon-list"></span> About Us</a></li>
                    <li><a href = "contactus.php"><span class = "glyphicon glyphicon-phone"></span> Contact Us</a></li>
              <?php endif; ?>
                </ul>
            </div>
        </div>
</div>