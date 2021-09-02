<?php 
include "../dbcon.php";

if (isset($_GET['id'])) {
	// code...
	echo $fed_id = $_GET['id'];

	//sql query
	$sql = "DELETE FROM `feedback` WHERE fed_id = '$fed_id'";
	//execute the query
	$res = mysqli_query($conn,$sql);
	if ($res == true) {
		// code...
		echo " <script type='text/javascript'>
 						alert('Feedback Deleted Successfully ! ');
 					</script>";
 		echo '<script type="text/javascript">
						window.location.href = "feedback.php";
					</script>';
	}
}

 ?>
 