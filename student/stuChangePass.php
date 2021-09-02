<?php include "partial/header.php" ?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
	<h3 class="text-center">Student Change Password</h3>
		<?php 
		include "../dbcon.php";

		if (isset($_GET['stu_id'])) {
			// code...
			$stu_email = $_SESSION['stuLogEmail'];
			$stu_id = $_GET['stu_id'];
		}
		 ?>


	<form action="#" method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label for="course_desc">Email</label>
			<input type="text" name="stu_id" id="stu_id" class="form-control" value="<?php echo $stu_email ?>" readonly>
		</div>
		<div class="form-group">
			<label for="course_author">New Password</label>
			<input type="password" name="stuNewPass" id="stuNewPass" class="form-control" required ">
		</div>
		<div class="text-center">
			<button type="submit" class="btn btn-danger" id="passChangeSubmitBtn" name="passChangeSubmitBtn" >Submit</button>
		</div>
	</form>
</div>
</div>
</div>


<?php include "partial/footer.php" ?>
<?php 
//student change password
if (isset($_POST['passChangeSubmitBtn'])) {
	// code...

	$stu_id = $_POST['stu_id'];
	$stu_new_pass = $_POST['stuNewPass'];

	//sql query
	$sql = "UPDATE `student` SET `stu_pass`= '$stu_new_pass' WHERE stu_id = '$stu_id'";
	//sql query
	$res = mysqli_query($conn,$sql);
	if ($res == true) {
		// code...
		echo " <script type='text/javascript'>
 						alert('Student Password Change Successfully !');
 					</script>";
 			echo '<script type="text/javascript">
						window.location.href = "stuChangePass.php";
					</script>';
	}
}

 ?>