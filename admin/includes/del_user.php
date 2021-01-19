<?php include "includes/connect_db.php" ?>
<?php 
	if(isset($_POST['del_user'])){
		   $user_id = $_POST['id'];
		   
		   $del_user = "DELETE FROM users WHERE id = $user_id ";
		   $delete_user = mysqli_query($conn, $del_user);
		   
		   if($delete_user){
	        echo "
	                <aside class='pure-message message-success'>
	                        <p><strong>SUCCESS</strong>: Delete user Has ID = $user_id Success</p>
	                </aside>        	
		             ";
		    }
		    else{
		        echo " 
		            <aside class='pure-message message-error'>
		                <p><strong>ERROR</strong>:  Failed to delete</p>
		            </aside>";
		    }
	}
?> 