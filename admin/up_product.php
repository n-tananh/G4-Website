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
                    <?php include "includes/insert_product.php" ?>
                    <h1 class="subhead">Add Product</h1>
                    <form action="" method="post" autocomplete="off" enctype="multipart/form-data" class="pure-form pure-form-stacked">
                        <fieldset>
                            <label for="title">Title</label>
                            <input id="title" name="name" type="text" placeholder="Title" class="pure-input-1" value="">

                            <label for="category">Category</label>
                            <select id="category" name="category_id" class="pure-input-1">
                                <?php 
                                    $get_cats ="select * from category";

                                    $run_cats = mysqli_query($conn, $get_cats);

                                    while($row_cats=mysqli_fetch_array($run_cats)){
                                    $cat_id = $row_cats['id'];

                                    $cat_title = $row_cats['name'];

                                    echo "<option value='$cat_id'>$cat_title</option>";
                                    }
                                ?>
                            </select>

                            <label for="singer">Singer</label>
                            <select id="singer" name="singer_id" class="pure-input-1">
                                <?php
                                    $get_singers = "select * from singer";
                                    $run_singers = mysqli_query($conn, $get_singers);

                                    while($row_singers = mysqli_fetch_array($run_singers)){
                                     $singer_id = $row_singers['id'];
                                     
                                     $singer_title = $row_singers['name'];
                                     
                                     echo "<option value='$singer_id'>$singer_title</option>";
                                    }
                                ?>
                            </select>

                            <label for="audio">Audio</label>
                            <input id="audio" name="audio" type="file"/>

                            <label for="image">Image</label>
                            <input id="image" name="image" type="file"/>

                            <label for="price_old">Product Price Old</label>
                            <input id="price_old" name="price_old"type="number" placeholder="Product Price Old" class="pure-input-1">

                            <label for="price_current">Product Price Current</label>
                            <input id="price_current" name="price_current" type="number" placeholder="Product Price Current" class="pure-input-1" >

                            <label for="discount">Discount</label>
                            <input id="discount" name="discount" type="number" placeholder="Discount" class="pure-input-1" >

                            <label for="description">Product Description</label>
                            <textarea id="description" name="description" class="pure-input-1" rows="5"></textarea>

                            <label for="keyword">Keyword</label>
                            <input id="keyword" name="keyword" type="text" placeholder="Keyword" class="pure-input-1" >

                            <input type="hidden" name="id" value="1">
                            <button  name="insert_product" value="Add Product" class="pure-button button-success">Save</button>
                        </fieldset>
                    </form>
                </div>    
            </div>
        </div>
    </div>
</body>
</html>
