<?php 
	$edit_product = mysqli_query($conn,"select * from product where id='$_GET[id]'");
	$fetch_edit = mysqli_fetch_array($edit_product);
 ?>
   <form action='' method='post' autocomplete='off' enctype='multipart/form-data' class='pure-form pure-form-stacked'>
        <fieldset>
            <label for='title'>Title</label>
            <input id='title' name='name' type='text' placeholder='Title' class='pure-input-1' value='<?php echo $fetch_edit['name'];  ?>'>

            <label for='category'>Category</label>
            <select id='category' name='category_id' class='pure-input-1'>
            <?php 
                $get_cats ='select * from category';

                $run_cats = mysqli_query($conn, $get_cats);

                while($row_cats=mysqli_fetch_array($run_cats)){
                $cat_id = $row_cats['id'];

                $cat_title = $row_cats['name'];
	                if($fetch_edit['category_id'] == $cat_id){
						echo "<option value='$fetch_edit[category_id]' selected>$cat_title</option>";
						
					}
					else{
						echo "<option value='$cat_id'>$cat_title</option>";
						
					}
                }
            ?>
            </select>

            <label for='singer'>Singer</label>
            <select id='singer' name='singer_id' class='pure-input-1'>
            <?php
                $get_singers = 'select * from singer';
                $run_singers = mysqli_query($conn, $get_singers);

                while($row_singers = mysqli_fetch_array($run_singers)){
                    $singer_id = $row_singers['id'];
                                     
                    $singer_title = $row_singers['name'];
                                     
                     if($fetch_edit['singer_id'] == $singer_id){
						echo "<option value='$fetch_edit[singer_id]' selected>$singer_title</option>";
						
					}
					else{
						echo "<option value='$singer_id'>$singer_title</option>";
						
					}
                }
            ?>
            </select>

            <label for='audio'>Audio</label>
            <input id='audio' name='audio' type='file' value='<?php echo $fetch_edit['file']; ?>'/>
            <audio controls src="audio_product/<?php echo $fetch_edit['file']; ?>"></audio>

            <label for='image'>Image</label>
            <input id='image' name='image' type='file' value='<?php echo $fetch_edit['image']; ?>'/>
            <img src="image_product/<?php echo $fetch_edit['image']; ?>" width="100" height="70" />

            <label for='price_old'>Product Price Old</label>
            <input id='price_old' name='price_old'type='number' value='<?php echo $fetch_edit['price_old'];?>' placeholder='Product Price Old' class='pure-input-1'>

            <label for='price_current'>Product Price Current</label>
            <input id='price_current' name='price_current' type='number' value='<?php echo $fetch_edit['price_current'];?>' placeholder='Product Price Current' class='pure-input-1' >

            <label for='discount'>Discount</label>
            <input id='discount' name='discount' type='number' placeholder='Discount' class='pure-input-1' value='<?php echo $fetch_edit['discount'];?>'>

            <label for='description'>Product Description</label>
            <textarea id='description' name='description' placeholder='Description' class='pure-input-1' rows='5' value='<?php echo $fetch_edit['des'];?>'><?php echo $fetch_edit['des'];?></textarea>

            <label for='keyword'>Keyword</label>
            <input id='keyword' name='keyword' type='text' placeholder='Keyword' class='pure-input-1' value='<?php echo $fetch_edit['keyword']; ?>' >

            <input type='hidden' name='id' value='1'>
            <button  name='edit_product' value='edit Product' class='pure-button button-success'>Save</button>
        </fieldset>
 	</form>
<?php 

if(isset($_POST['edit_product'])){
  	$product_title = $_POST['name'];
    $product_cat = $_POST['category_id'];
    $product_singer = $_POST['singer_id'];
    $product_price_old = $_POST['price_old'];
    $product_price_current= $_POST['price_current'];
    $product_discount = $_POST['discount']; 

    $product_audio  = $_FILES['audio']['name'];
    $product_audio_tmp = $_FILES['audio']['tmp_name'];                
     move_uploaded_file($product_audio_tmp,"image_product/$product_audio"); 

    $product_image  = $_FILES['image']['name'];
    $product_image_tmp = $_FILES['image']['tmp_name'];                
     move_uploaded_file($product_image_tmp,"image_product/$product_image");  

    $product_desc = trim(mysqli_real_escape_string($conn,$_POST['description']));
    $product_keyword = $_POST['keyword'];
   
   // Getting the image from the field
   
   if(!empty($_FILES['image']['name'])){
   
	   if(move_uploaded_file($product_image_tmp,"image_product/$product_image")){
	   
	   	$update_product = mysqli_query($conn,"UPDATE `product` SET `category_id`='$product_cat',`singer_id`='$product_singer',`name`='$product_title',`price_old`='$product_price_old',`price_current`='$product_price_current',`discount`='$product_discount',`file`='$product_audio',`image`='$product_image',`des`='$product_desc',`keyword`='$product_keyword' WHERE id=$_GET[id]");
	   
	   }
	   
   }else{
   	$update_product = mysqli_query($conn,"UPDATE `product` SET `category_id`='$product_cat',`singer_id`='$product_singer',`name`='$product_title',`price_old`='$product_price_old',`price_current`='$product_price_current',`discount`='$product_discount',`file`='$product_audio',`des`='$product_desc',`keyword`='$product_keyword' WHERE id=$_GET[id] ");
   
   }
   
   if($update_product){
	   
	   echo "<script>alert('Product was updated successfully!')</script>";
	   echo "<script>window.open('product_management.php','_self')</script>";
	   
	   echo "<script>window.open(window.location.href,'_self')</script>";
   }
   else{
	   	printf("Error: %s\n", mysqli_error($conn));
	    exit();
   }
   
   }
?>


