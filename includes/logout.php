<?php session_start(); 
if (isset($_SESSION['username'])){
    unset($_SESSION['username']); // xóa session login
    unset($_SESSION['role_id']);
    echo "<script>window.open('../index.php','_self')</script>";
}
?>