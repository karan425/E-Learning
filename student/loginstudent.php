<?php 
// <!-- Student login verification -->
if (!isset($_SESSION)) {
	# code...
	session_start();
}
include_once('../dbcon.php');

if (!isset($_SESSION['is_login'])) {
	if (isset($_POST['checklogstu']) && isset($_POST['stuLogEmail']) && isset($_POST['stuLogPass'])) {
		// code...

		$stuLogEmail = $_POST['stuLogEmail'];
		$stuLogPass = $_POST['stuLogPass'];

		$sql = "SELECT * FROM student WHERE stu_email = '$stuLogEmail' AND stu_pass = '$stuLogPass'";
		
		$result = $conn->query($sql);
		$row = $result->num_rows;

		if ($row>0) {
			// code...
			$_SESSION['is_login'] = true;
			$_SESSION['stuLogEmail'] = $stuLogEmail;
			echo json_encode($row);
		}else{
			echo json_encode($row);
		}

	}
}

 ?>
