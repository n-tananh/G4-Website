<?php include "connect_db.php" ?>
<?php 
   if(isset($_POST['insert_product'])){
    $product_title = $_POST['name'];
    $product_cat = $_POST['category_id'];
    $product_singer = $_POST['singer_id'];
    $product_price_old = $_POST['price_old'];
    $product_price_current= $_POST['price_current'];
    $product_discount = $_POST['discount']; 
    $product_audio  = $_FILES['audio']['name'];
    $product_audio_tmp = $_FILES['audio']['tmp_name'];                
     move_uploaded_file($product_audio_tmp,"audio_product/$product_audio"); 
    $product_image  = $_FILES['image']['name'];
    $product_image_tmp = $_FILES['image']['tmp_name'];                
     move_uploaded_file($product_image_tmp,"image_product/$product_image");       
    $product_desc = trim(mysqli_real_escape_string($conn,$_POST['description']));
    $product_keyword = $_POST['keyword'];
    // Getting the image from the field

    $insert_product = " INSERT INTO `product`(`id`, `category_id`, `singer_id`, `name`, `price_old`, `price_current`, `discount`, `file`, `image`, `des`, `keyword`)  
     values (null,'$product_cat','$product_singer','$product_title','$product_price_old','$product_price_current','$product_discount','$product_audio','$product_image','$product_desc','$product_keyword') ";
    $insert_pro = mysqli_query($conn, $insert_product);
                       
    if($insert_pro){
        echo "<script>alert('Product Has Been inserted successfully!')</script>
                <aside class='pure-message message-success'>
                        <p><strong>SUCCESS</strong>: Success message.</p>
                </aside>";
    }
    else{
        echo " 
            <aside class='pure-message message-error'>
                <p><strong>ERROR</strong>  
                : echo 'Error: ' . $insert_product </p>
            </aside>";
       }

    }                   
?> 
                
 
                 