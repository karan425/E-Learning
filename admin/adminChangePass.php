

 <?php include "partial/header.php" ?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
	<h3 class="text-center">Admin Change Password</h3>
		<?php 
		include "../dbcon.php";

		if (!isset($_SESSION)) {
			// code...
			session_start();
		}

		if (isset($_SESSION['adminLogEmail'] )) {
			// code...
			$adminEmail = $_SESSION['adminLogEmail'] ;

		}


		 ?>


	<form action="#" method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label for="course_desc">Email</label>
			<input type="text" name="stu_email" id="stu_email" class="form-control" value="<?php echo $adminEmail; ?>" readonly>
		</div>
		<div class="form-group">
			<label for="course_author">New Password</label>
			<input type="password" name="adminNewPass" id="adminNewPass" class="form-control" required ">
		</div>
		<div class="text-center">
			<input type="hidden" name="admin_email" value="<?php echo $adminEmail; ?>">
			<button type="submit" class="btn btn-danger" id="adminSubmitBtn" name="adminSubmitBtn" >Submit</button>
			<a href="Student.php" class="btn btn-secondary">Close</a>
		</div>
	</form>
</div>
</div>
</div>


<?php include "partial/footer.php" ?>

<?php 
include "../dbcon.php";

if (isset($_POST['adminSubmitBtn'])) {
	// code...
		//Checking for Empty fields
		$adminEmail = $_POST['admin_email'];
		$adminNewPass = $_POST['adminNewPass'];


		//sql query
		$sql2 = "UPDATE `admin` SET `admin_pass`= '$adminNewPass' WHERE admin_email = '$adminEmail'";

		//execute the query
		$res2 = $conn->query($sql2);

		if ($res2 == true) {
			# code...
 			echo " <script type='text/javascript'>
 						alert('Admin Password Change Successfully !');
 					</script>";
 			echo '<script type="text/javascript">
						window.location.href = "adminDeshborad.php";
					</script>';
		}else{
			echo " <script type='text/javascript'>
 						alert('Failed to Change ! ');
 					</script>";			
		}
			
}
 ?>


