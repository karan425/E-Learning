<?php 

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "aaoo_db";

// Create connection
$conn = new mysqli($db_host,$db_user,$db_pass,$db_name);

// Check Connection
if ($conn->connect_error) {
	// code...
	die("connection failed");
}
// else{
// 	echo "connected";
// }


 ?>