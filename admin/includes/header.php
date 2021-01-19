<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a blog page with a list of posts.">
    <title>ADMIN</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favico.png">
    <link rel="stylesheet" href="assets/css/pure-min.css">
    <link rel="stylesheet" href="assets/css/pure-responsive-min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div id="layout" class="pure-g">
        <div class="sidebar pure-u-1 pure-u-md-3-24">
            <div id="menu">
                <div class="pure-menu">
                    <?php 
                        if(isset($_SESSION['username']) && !empty($_SESSION['username']) && isset($_SESSION['role_id']) && !empty($_SESSION['role_id']) &&($_SESSION['role_id'] == 1)) {
                            ?>
                                <p class="pure-menu-heading">
                                    <?php echo $_SESSION['username']?>
                                    <a href="includes/logout_admin.php" class="pure-button button-xxsmall">OUT &raquo;</a>
                                </p>
                            <?php
                        }
                        else{
                            echo "<script>window.open('login.php','_self')</script>";
                        }
                    ?>
                    <ul class="pure-menu-list ">
                        <li class="pure-menu-item pure-menu-selected">
                            <a href="index.php" class="pure-menu-link ">Dashboard</a>
                        </li>
                        <li class="pure-menu-item ">
                            <a href="../index.php" class="pure-menu-link ">My site</a>
                        </li>
                        <li class="pure-menu-item menu-item-divided ">
                            <a href="product_management.php" class="pure-menu-link">Product Management</a>
                        </li>
                        <li class="pure-menu-item ">
                            <a href="category_management.php" class="pure-menu-link">Category Management</a>
                        </li>
                        <li class="pure-menu-item ">
                            <a href="origin_management.php" class="pure-menu-link">Origin Management</a>
                        </li>
                        <li class="pure-menu-item ">
                            <a href="singer_management.php" class="pure-menu-link">Singer Management</a>
                        </li>
                        <li class="pure-menu-item ">
                            <a href="user_management.php" class="pure-menu-link">User Management</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>