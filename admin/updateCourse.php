<?php include "partial/header.php" ?>


<div class="col-sm-6 mt-5 mx-3 jumbotron">
	<h3 class="text-center">Update Course</h3>

	<?php 
	include "../dbcon.php";

	if (isset($_GET['id'])) {
		// code...
		$course_id = $_GET['id'];

		//sql query
		$sql = "SELECT * FROM course WHERE course_id='$course_id'";
		//execute the query
		$res = mysqli_query($conn,$sql);
		if ($rows = mysqli_fetch_assoc($res)) {
			// code...
			$course_name = $rows['course_name'];
			$course_desc = $rows['course_desc'];
			$course_author = $rows['course_author'];
			$course_duration = $rows['course_duration'];
			$course_img = $rows['course_img'];
			$course_selling_price = $rows['course_price'];
			$course_original_price = $rows['course_original_price'];
		}

	}

	 ?>
	<form action="#" method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label for="course_name">Course Name</label>
			<input type="text" name="course_name" id="course_name" class="form-control" value="<?php echo $course_name; ?>">
		</div>
		<div class="form-group">
			<label for="course_desc">Course Description</label>
			<textarea class="form-control" id="course_desc" name="course_desc" row="2"><?php echo $course_desc;; ?></textarea>
		</div>
		<div class="form-group">
			<label for="course_author">Author</label>
			<input type="text" name="course_author" id="course_author" class="form-control" value="<?php echo $course_author; ?>">
		</div>
		<div class="form-group">
			<label for="course_duration">Course Duration</label>
			<input type="text" name="course_duration" id="course_duration" class="form-control" value="<?php echo $course_duration; ?>">
		</div>
		<div class="form-group">
			<label for="course_original_price">Course Original Price</label>
			<input type="text" name="course_original_price" id="course_original_price" class="form-control" value="<?php echo $course_original_price; ?>">
		</div>
		<div class="form-group">
			<label for="course_selling_price">Course Selling Price</label>
			<input type="text" name="course_selling_price" id="course_selling_price" class="form-control" value="<?php echo $course_selling_price; ?>">
		</div>
		<div class="form-group">
			<label for="course_img">Course Image</label>
			<img src="<?php echo $course_img; ?>" class="img-thumbnail" height="100" width="100"><br>
			<input type="file" name="course_img" id="course_img" class="form-control" required>
		</div>
		<div class="text-center">
			<input type="hidden" name="id" value="<?php echo $course_id; ?>">
			<button type="submit" class="btn btn-danger" id="courseSubmitBtn" name="courseSubmitBtn" >Update</button>
			<a href="courses.php" class="btn btn-secondary">Close</a>
		</div>
	</form>
</div>
</div>
</div>


<?php include "partial/footer.php" ?>

<?php 
if (isset($_POST['courseSubmitBtn'])) {
	// code...
		$course_id = $_REQUEST['id'];
		$course_name = $_REQUEST['course_name'];
		$course_desc = $_REQUEST['course_desc'];
		$course_author = $_POST['course_author'];
		$course_duration =  $_REQUEST['course_duration'];
		$course_original_price = $_REQUEST['course_original_price'];
		$course_selling_price = $_REQUEST['course_selling_price'];
		//image uploading 
		$course_img = $_FILES['course_img']['name'];
		$course_img_temp = $_FILES['course_img']['tmp_name'];
		$img_folder = "../image/courseimg/$course_img";
		move_uploaded_file($course_img_temp,$img_folder);


		//sql query
		$sql2 = "UPDATE `course` SET 
		`course_name`='$course_name',
		`course_desc`='$course_desc',
		`course_author`='$course_author',
		`course_img`='$img_folder',
		`course_duration`='$course_duration',
		`course_price`='$course_selling_price',
		`course_original_price`='$course_original_price' 
		WHERE course_id = '$course_id'";

		//execute the query
		$res2 = mysqli_query($conn,$sql2);
		if ($res2==true) {
			// code...
			echo " <script type='text/javascript'>
 						alert('Course Update Successfully ! ');
 					</script>";
 			echo '<script type="text/javascript">
						window.location.href = "courses.php";
					</script>';
		}else{
			echo " <script type='text/javascript'>
 						alert('Course Update Failed ! ');
 					</script>";
		}

}

 ?>



