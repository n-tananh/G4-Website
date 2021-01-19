<?php
include("connect_db.php");
if (isset($_POST['register'])) {
    if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['confirm_password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        $check_exist = mysqli_query($conn, "select * from users where username = '$username'");
        $username_count = mysqli_num_rows($check_exist);
        $row_register = mysqli_fetch_array($check_exist);
        if ($username_count > 0) {
            echo "<script>alert('Sorry, your username already exist in our database !')</script>";
        } elseif ($row_register['username'] != $username && $password == $confirm_password) {
            $password = md5($confirm_password);
            $run_insert = mysqli_query($conn, "INSERT INTO user VALUES ('','1','$username','$password','','')");
            if ($run_insert) {
                echo "<script>alert('Account has been created successfully!')</script>";
                echo "<script>window.open('index.php','_self')</script>";
            }
        }
    }
}
?>
