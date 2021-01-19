<?php  include "includes/connect_db.php" ?>
<?php 
	if(isset($_POST['insert_singer'])){
	   	$singer_title = $_POST['name'];
	   	$singer_origin = $_POST['origin_id'];
		$insert_singer = " insert into `singer`(`id`,`name`,`origin_id`)
	   	values (null,'$singer_title','$singer_origin')";
	   	$insert_singer = mysqli_query($conn, $insert_singer);
	   
	    if($insert_singer){
        echo "<script>alert('Product Has Been inserted successfully!')</script>
                <aside class='pure-message message-success'>
                        <p><strong>SUCCESS</strong>: Success message.</p>
                </aside>        	
             ";
    	}
    	else{
        echo " 
            <aside class='pure-message message-error'>
                <p><strong>ERROR</strong>  
                : echo 'Error: ' . $insert_singer  </p>
            </aside>";
       }

	}
?>