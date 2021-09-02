<?php 
include "../dbcon.php";

if (isset($_GET['id'])) {
	// code...
	$stu_id = $_GET['id'];

	//sql query
	$sql = "DELETE FROM `student` WHERE stu_id = '$stu_id'";
	//execute the query
	$res = mysqli_query($conn,$sql);
	if ($res == true) {
		// code...
		echo " <script type='text/javascript'>
 						alert('Student Deleted  Successfully ! ');
 					</script>";
 		echo '<script type="text/javascript">
						window.location.href = "Student.php";
					</script>';
	}
}

 ?>
 