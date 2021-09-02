<?php 
include "../dbcon.php";
if (!isset($_SESSION)) {
	// code...
	session_start();
}

if (isset($_GET['id'])) {
	// code...
	$lesson_id = $_GET['id'];
	$course_id = $_GET['course_id'];
	$course_name = $_GET['course_name'];

	//sql query
	$sql = "DELETE FROM `lessons` WHERE lesson_id = '$lesson_id'";
	//execute the query
	$res = mysqli_query($conn,$sql);
	if ($res == true) {
		// code...
		$_SESSION['course_id'] = $course_id;
		$_SESSION['course_name'] = $course_name;
		echo " <script type='text/javascript'>
 						alert('Lesson Deleted  Successfully ! ');
 					</script>";
 		echo '<script type="text/javascript">
						window.location.href = "lessons.php";
					</script>';

	}
}

 ?>
 