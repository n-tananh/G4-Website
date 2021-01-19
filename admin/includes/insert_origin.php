<?php  include "includes/connect_db.php" ?>
<?php 
	if(isset($_POST['insert_origin'])){
	   	$origin_title = $_POST['name'];
		$insert_origin = " insert into `origin`(`id`,`name`)
	   	values (null,'$origin_title')";
	   	$insert_origin = mysqli_query($conn, $insert_origin);
	   
	    if($insert_origin){
        echo "<script>alert('Product Has Been inserted successfully!')</script>
                <aside class='pure-message message-success'>
                        <p><strong>SUCCESS</strong>: Success message.</p>
                </aside>        	
             ";
        echo "<script>window.open('origin_management.php','_self')</script>";
    	}
    	else{
        echo " 
            <aside class='pure-message message-error'>
                <p><strong>ERROR</strong>  
                : echo 'Error: ' . $insert_origin  </p>
            </aside>";
       }

	}
?>