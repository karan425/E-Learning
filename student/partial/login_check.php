<?php 
if (!isset($_SESSION)) {
	// code...
	session_start();
}
if (!isset(	$_SESSION['is_login'])) {
	# code...
	echo "<script type='text/javascript'>
 	alert('Please login to access student panal')
 	</script>";
 	echo '<script type="text/javascript">
						window.location.href = "../index.php";
					</script>';

}

 ?>
 