<?php include "partial/header.php" ?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
	<h3 class="text-center">Add New Studen</h3>
	<form action="#" method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label for="course_name">Name</label>
			<input type="text" name="stu_name" id="stu_name" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="course_desc">Email</label>
			<textarea class="form-control" id="stu_email" name="stu_email" row="2" required></textarea>
		</div>
		<div class="form-group">
			<label for="course_author">Password</label>
			<input type="password" name="stu_pass" id="stu_pass" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="course_duration">Occupation</label>
			<input type="text" name="stu_occ" id="stu_occ" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="course_img">Image</label>
			<input type="file" name="stu_img" id="stu_img" class="form-control" >
		</div>
		<div class="text-center">
			<button type="submit" class="btn btn-danger" id="studentSubmitBtn" name="studentSubmitBtn" >Submit</button>
			<a href="Student.php" class="btn btn-secondary">Close</a>
		</div>
	</form>
</div>
</div>
</div>


<?php include "partial/footer.php" ?>

<?php 
include "../dbcon.php";

if (isset($_POST['studentSubmitBtn'])) {
	// code...
		//Checking for Empty fields
		$stu_name = $_POST['stu_name'];
		$stu_email = $_POST['stu_email'];
		$stu_pass = $_POST['stu_pass'];
		$stu_occ = $_POST['stu_occ'];
		//image uploading 
		$stu_img = $_FILES['stu_img']['name'];
		$stu_img_temp = $_FILES['stu_img']['tmp_name'];
		$img_folder = '../image/student/'.$stu_img;
		move_uploaded_file($stu_img_temp,$img_folder);


		//sql query
		$sql = "INSERT INTO `student`(`stu_name`, `stu_email`, `stu_pass`, `stu_occ`,`stu_img`) VALUES ('$stu_name','$stu_email','$stu_pass','$stu_occ','$img_folder')";

		//execute the query
		$res = $conn->query($sql);

		if ($res == true) {
			# code...
			echo " <script type='text/javascript'>
 						alert('Student Added Successfully ! ');
 					</script>";
		}else{
			echo " <script type='text/javascript'>
 						alert('Failed to add ! ');
 					</script>";			
		}
			
}
 ?>


