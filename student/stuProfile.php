<?php include "partial/header.php"; ?>


<?php 

if (!isset($_SESSION)) {
	// code...
	session_start();
}
include "../dbcon.php";

$stu_email = $_SESSION['stuLogEmail'];
//sql query
$sql = "SELECT * FROM student WHERE stu_email = '$stu_email'";
//execute the query
$res = mysqli_query($conn,$sql);
//count the rows
$count = mysqli_num_rows($res);
if ($count > 0) {
	// code...
	$rows = mysqli_fetch_assoc($res);
	//get all the data from database
	$stu_id = $rows['stu_id'];
	$stu_name = $rows['stu_name'];
	$stu_occ = $rows['stu_occ'];

}

 ?>
<div class="col-sm-6 mt-5 mx-3 jumbotron">
	<form action="#" method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label for="stuID">Student ID</label>
			<input type="text" name="stuID" id="stuID" class="form-control" value="<?php echo $stu_id; ?>" readonly>
		</div>
		<div class="form-group">
			<label for="stuEmail">Email</label>
			<input type="text" name="stuEmail" id="stuEmail" class="form-control" value="<?php echo $stu_email; ?>" readonly="">
		</div>
		<div class="form-group">
			<label for="stuName">Name</label>
			<input type="text" name="stuName" id="stuName" class="form-control" value="<?php echo $stu_name; ?>" required>
		</div>
		<div class="form-group">
			<label for="stuOcc">Occupation</label>
			<input type="text" name="stuOcc" id="stuOcc" class="form-control" value="<?php echo $stu_occ; ?>" required>
		</div>
		<div class="form-group">
			<label for="stuImage">Image</label>
			<input type="file" name="stuImage" id="stuImage" class="form-control" required>
		</div>
		<div class="text-center">
			<button type="submit" class="btn btn-danger" id="updateSubmitBtn" name="updateSubmitBtn" >Update</button>
		</div>
	</form>
</div>
</div>
</div>


<?php include "partial/footer.php"; ?>

<?php 
//student profile update
if (isset($_POST['updateSubmitBtn'])) {
	// code...
	$stu_id = $_POST['stuID'];
	$stu_name = $_POST['stuName'];
	$stu_occ = $_POST['stuOcc'];
	//upload image
	echo $stu_img = $_FILES['stuImage']['name'];
	$stu_img_temp = $_FILES['stuImage']['tmp_name'];
	$img_folder = "../image/student/".$stu_img;
	move_uploaded_file($stu_img_temp,$img_folder);

	//sql query
	$sql2 = "UPDATE `student` SET `stu_name`='$stu_name',`stu_occ`= '$stu_occ',`stu_img`= '$img_folder' WHERE stu_id = '$stu_id'";
	//execute the query
	$res2 = mysqli_query($conn,$sql2);
	if ($res2 == true ) {
		// code...
		echo " <script type='text/javascript'>
 						alert('Profile Updated Successfully ! ');
 					</script>";
 		echo '<script type="text/javascript">
						window.location.href = "stuProfile.php";
					</script>';
	}
}


 ?>
