<?php include "includes/connect_db.php" ?>
<?php 
	if(isset($_POST['del_singer'])){
		   $singer_id = $_POST['id'];
		   
		   $del_singer = "DELETE FROM brand WHERE 	id = $singer_id ";
		   $delete_singer = mysqli_query($conn, $del_singer);
		   
		   if($delete_singer){
	        echo "
	                <aside class='pure-message message-success'>
	                        <p><strong>SUCCESS</strong>: Delete singer Has ID = $singer_id Success</p>
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