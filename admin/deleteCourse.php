<?php 
include "../dbcon.php";

if (isset($_GET['id'])) {
	// code...
	$course_id = $_GET['id'];

	//sql query
	$sql = "DELETE FROM `course` WHERE course_id = '$course_id'";
	//execute the query
	$res = mysqli_query($conn,$sql);

	if ($res == true) {
		// code...
	echo " <script type='text/javascript'>
 						alert('Course Deleted Successfully ! ');
 					</script>";
 	echo '<script type="text/javascript">
						window.location.href = "courses.php";
					</script>';
	}
}

 ?>
 