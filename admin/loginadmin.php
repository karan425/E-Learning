<?php 
// <!-- Admin login verification -->
if (!isset($_SESSION)) {
	# code...
	session_start();
}
include_once('../dbcon.php');

if (!isset($_SESSION['is_adminlogin'])) {
	if (isset($_POST['checklogadmin']) && isset($_POST['adminLogEmail']) && isset($_POST['adminLogPass'])) {
		// code...

		$adminLogEmail = $_POST['adminLogEmail'];
		$adminLogPass = $_POST['adminLogPass'];

		$sql = "SELECT * FROM admin WHERE admin_email = '$adminLogEmail' AND admin_pass = '$adminLogPass'";
		
		$result = $conn->query($sql);
		$row = $result->num_rows;

		if ($row>0) {
			// code...
			$_SESSION['is_adminlogin'] = true;
			$_SESSION['adminLogEmail'] = $adminLogEmail;
			echo json_encode($row);
		}else{
			echo json_encode($row);
		}

	}
}

 ?>
