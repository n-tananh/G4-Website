<?php include "includes/connect_db.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a blog page with a list of posts.">
    <title>Pure Admin Panel</title>
    <link rel="stylesheet" href="assets/css/pure-min.css">
    <link rel="stylesheet" href="assets/css/pure-responsive-min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div id="layout" class="pure-g">
        <div class="sidebar pure-u-1 pure-u-md-3-24">
            <div id="menu">
                <div class="pure-menu">
                    <p class="pure-menu-heading">
                        Pure Admin
                        <a href="login.html" class="pure-button button-xxsmall">OUT &raquo;</a>
                    </p>
                    <ul class="pure-menu-list ">
                        <li class="pure-menu-item pure-menu-selected">
                            <a href="index.php" class="pure-menu-link ">Dashboard</a>
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
        <div class="content pure-u-1 pure-u-md-21-24">
            <div class="header-small">
                <div class="items">
                    <h1 class="subhead">Edit Category</h1>
                     <?php include "includes/edit_product.php" ?>
                </div>    
            </div>
        </div>
       
    </div>
</body>
</html>
