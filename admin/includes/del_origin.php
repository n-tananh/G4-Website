<?php include "includes/connect_db.php" ?>
<?php 
	if(isset($_POST['del_origin'])){
		   $origin_id = $_POST['id'];
		   
		   $del_origin = "DELETE FROM origin WHERE id = $origin_id ";
		   $delete_ori = mysqli_query($conn, $del_origin);
		   
		   if($delete_ori){
	        echo "
	                <aside class='pure-message message-success'>
	                        <p><strong>SUCCESS</strong>: Delete origin Has ID = $origin_id Success</p>
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
