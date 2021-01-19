<!-- HTML -->
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en ">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Admin login</title>
    <link rel="stylesheet" href="assets/css/auth_form.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="#">
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="social"><i class="fa fa-google"></i></a>
                    <a href="#" class="social"><i class="fa fa-linkedin"></i></a>
                </div>
                <span>or use your email for registration</span>
                <input type="text" placeholder="Name" />
                <input type="email" placeholder="Email" />
                <input type="password" placeholder="Password" />
                <button>Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="#" method="post">
                <h1>Log In</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="social"><i class="fa fa-google"></i></a>
                    <a href="#" class="social"><i class="fa fa-linkedin"></i></a>
                </div>
                <span>or use your account</span>
                <input name="username" type="text" placeholder="Email" />
                <input name="password" type="password" placeholder="Password" />
                <a href="#">Forgot your password?</a>
                <button name="login">Log In</button>
            </form>
            <?php include "includes/auth_login_admin.php" ?>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Lorem, ipsum</h1>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum, nulla.</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Lorem, ipsum</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, sunt.</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
        <?php include ("includes/auth_login_admin.php");?>
    </div>
<script type="text/javascript" src="assets/js/auth_form.js"></script>
</body>
</html>

