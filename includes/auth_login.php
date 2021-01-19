<?php 
  include("includes/connect_db.php");
  if(isset($_POST['login'])){
    
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    
    $username = strip_tags($username);
    $username = addslashes($username);
    $password = strip_tags($password);
    $password = addslashes($password);
    
    $result = mysqli_query($conn, "select * from users where username='$username' AND password='$password'" );
    
    $check_login = mysqli_num_rows($result);
    
    $row_login = mysqli_fetch_array($result);

    if($check_login == 0){
     echo "<script>alert('Password or username is incorrect, please try again!')</script>";  
     echo "<script>window.open('index.php','_self')</script>";
     exit();
    }  
    if($check_login > 0){ 
      $_SESSION['username'] = $username;
      $_SESSION['role_id'] = $row_login['roles_id'];
      echo "<script>alert('Login successful! Wellcome back $username !')</script>";
      echo "<script>window.open('index.php','_self')</script>";
    }
  }
?>

