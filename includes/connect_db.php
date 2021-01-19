<?php
$host = "3.140.182.114";
	$user = "root";
	$password = "huyendt";
	$database = "wp"; 
	$conn = mysqli_connect($host,$user,$password, $database);
	// Check connection
	if (!$conn) {
	    die("Connection failed: " .mysqli_connect_error());exit;
	}	
?>
