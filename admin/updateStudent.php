<?php include "partial/header.php" ?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
	<h3 class="text-center">Update Studen Detailes</h3>
		<?php 

			include "../dbcon.php";
			$stu_id = $_GET['id'];
			//sql query
			$sql = "SELECT * FROM student WHERE stu_id='$stu_id'";
			//execute the query
			$res = mysqli_query($conn,$sql);
			if ($rows = mysqli_fetch_assoc($res)) {
				// code...
				$stu_name = $rows['stu_name'];
				$stu_email = $rows['stu_email'];
				$stu_pass = $rows['stu_pass'];
				$stu_occ = $rows['stu_occ'];
				$stu_img = $rows['stu_img'];
			}


		 ?>


	<form action="#" method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label for="course_name">Name</label>
			<input type="text" name="stu_name" id="stu_name" class="form-control" value="<?php echo $stu_name; ?>">
		</div>
		<div class="form-group">
			<label for="course_desc">Email</label>
			<input type="text" name="stu_email" id="stu_email" class="form-control" value="<?php echo $stu_email; ?>">
		</div>
		<div class="form-group">
			<label for="course_author">Password</label>
			<input type="password" name="stu_pass" id="stu_pass" class="form-control" required value="<?php echo $stu_pass; ?>">
		</div>
		<div class="form-group">
			<label for="course_duration">Occupation</label>
			<input type="text" name="stu_occ" id="stu_occ" class="form-control" required value="<?php echo $stu_occ; ?>">
		</div>
		<div class="form-group">
			<label for="course_img">Old Image</label>
			<img src="<?php echo $stu_img; ?>" class="img-thumbnail" height="100" width="100">
		</div>
		<div class="form-group">
			<label for="course_img">New Image</label>
			<input type="file" name="stu_img" id="stu_img" class="form-control" >
		</div>
		<div class="text-center">
			<input type="hidden" name="id" value="<?php echo $stu_id; ?>">
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
		$stu_id = $_POST['id'];
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
		$sql2 = "UPDATE `student` SET `stu_name`='$stu_name',`stu_email`='$stu_email',`stu_pass`='$stu_pass',`stu_occ`='$stu_occ',`stu_img`='$img_folder' WHERE stu_id = '$stu_id'";

		//execute the query
		$res2 = $conn->query($sql2);

		if ($res2 == true) {
			# code...
 			echo " <script type='text/javascript'>
 						alert('Student Detailes Update Successfully !');
 					</script>";
 			echo '<script type="text/javascript">
						window.location.href = "Student.php";
					</script>';
		}else{
			echo " <script type='text/javascript'>
 						alert('Failed to Update ! ');
 					</script>";			
		}
			
}
 ?>


