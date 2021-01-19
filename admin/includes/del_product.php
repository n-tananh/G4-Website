<?php include "includes/connect_db.php" ?>
<?php 
	if(isset($_POST['del_product'])){
		   $product_id = $_POST['id'];
		   
		   $del_product = "DELETE FROM product WHERE id = $product_id ";
		   $delete_pro = mysqli_query($conn, $del_product);
		   
		   if($delete_pro){
	        echo "
	                <aside class='pure-message message-success'>
	                        <p><strong>SUCCESS</strong>: Delete Product Has ID =  $product_id Success</p>
	                </aside>        	
		             ";
		    }
		    else{
		        echo " 
		            <aside class='pure-message message-error'>
		                <p><strong>ERROR</strong>  
		                : echo 'Error: ' . $delete_pro </p>
		            </aside>";
		    }
	   }
?> 
