<?php include "includes/connect_db.php"; ?>
<?php 
if(isset($_POST['insert_post'])){
   $category_title = $_POST['name'];
   $insert_category = " insert into `category`(`id`,`name`) values (null,'$category_title') ";
   $insert_category = mysqli_query($conn, $insert_category);
   
   if($insert_category){
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
                : echo 'Error: ' . $insert_category </p>
            </aside>";
       }

    }   
?>
         
