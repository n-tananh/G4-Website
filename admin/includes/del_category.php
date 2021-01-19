<?php include "includes/connect_db.php" ?>
<?php 
	if(isset($_POST['del_category'])){
		   $category_id = $_POST['id'];
		   
		   $del_category = "DELETE FROM category WHERE id = $category_id ";
		   $delete_cate = mysqli_query($conn, $del_category);
		   
		   if($delete_cate){
	        echo "
	                <aside class='pure-message message-success'>
	                        <p><strong>SUCCESS</strong>: Delete category Has ID = $category_id Success</p>
	                </aside>        	
		             ";
		    }
		    else{
		        echo " 
		            <aside class='pure-message message-error'>
		                <p><strong>ERROR</strong>  
		                : echo 'Error: Failed to delete</p>
		            </aside>";
		    }
	   }
?> 
