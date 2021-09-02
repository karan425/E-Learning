<?php include "partial/header.php" ?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
	<h3 class="text-center">Add New Course</h3>
	<form action="#" method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label for="course_name">Course Name</label>
			<input type="text" name="course_name" id="course_name" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="course_desc">Course Description</label>
			<textarea class="form-control" id="course_desc" name="course_desc" row="2" required></textarea>
		</div>
		<div class="form-group">
			<label for="course_author">Author</label>
			<input type="text" name="course_author" id="course_author" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="course_duration">Course Duration</label>
			<input type="text" name="course_duration" id="course_duration" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="course_original_price">Course Original Price</label>
			<input type="text" name="course_original_price" id="course_original_price" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="course_selling_price">Course Selling Price</label>
			<input type="text" name="course_selling_price" id="course_selling_price" class="form-control">
		</div>
		<div class="form-group">
			<label for="course_img">Course Image</label>
			<input type="file" name="course_img" id="course_img" class="form-control" required>
		</div>
		<div class="text-center">
			<button type="submit" class="btn btn-danger" id="courseSubmitBtn" name="courseSubmitBtn" >Submit</button>
			<a href="courses.php" class="btn btn-secondary">Close</a>
		</div>
	</form>
</div>
</div>
</div>


<?php include "partial/footer.php" ?>

<?php 
include "../dbcon.php";

if (isset($_POST['courseSubmitBtn'])) {
	// code...
		//Checking for Empty fields
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
		$sql = "INSERT INTO `course`(`course_name`,`course_desc`,`course_author`, `course_img`, `course_duration`, `course_price`, `course_original_price`) VALUES ('$course_name','$course_desc','$course_author','$img_folder','$course_duration','$course_selling_price','$course_original_price')";

		//execute the query
		$res = $conn->query($sql);

		if ($res == true) {
			# code...
			echo " <script type='text/javascript'>
 						alert('Course Added Successfully ! ');
 					</script>";
		}else{
			echo " <script type='text/javascript'>
 						alert('Failed to add ! ');
 					</script>";			
		}
			
}
 ?>


