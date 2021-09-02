<?php include "partial/header.php" ?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
	<h3 class="text-center">Add New lesson</h3>
	<?php 
		if (isset($_GET['course_id']) && isset($_GET['course_name'])) {
			// code...
			$course_id = $_GET['course_id'];
			$course_name = $_GET['course_name'];
		}

	 ?>
	<form action="#" method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label for="course_name">Course ID</label>
			<input type="text" class="form-control" name="course_id" value="<?php echo $course_id; ?>" readonly>
		</div>
		<div class="form-group">
			<label for="course_author">Course Name</label>
			<input type="text" class="form-control" name="course_name" value="<?php echo $course_name; ?>" readonly>
		</div>
		<div class="form-group">
			<label for="course_author">Lesson Name</label>
			<input type="text" name="lesson_name" id="lesson_name" class="form-control" >
		</div>
		<div class="form-group">
			<label for="course_duration">Lesson Description</label>
			<input type="text" name="lesson_desc" id="lesson_desc" class="form-control" >
		</div>
		<div class="form-group">
			<label for="course_img">Lesson Video Link</label>
			<input type="file" name="lesson_link" id="lesson_link" class="form-control" >
		</div>
		<div class="text-center">
			<button type="submit" class="btn btn-danger" id="lessonSubmitBtn" name="lessonSubmitBtn" >Submit</button>
			<a href="lessons.php" class="btn btn-secondary">Close</a>
		</div>
	</form>
</div>
</div>
</div>


<?php include "partial/footer.php" ?>

<?php 
include "../dbcon.php";

if (isset($_POST['lessonSubmitBtn'])) {
	
	// code...
		//Checking for Empty fields
		$course_id = $_POST['course_id'];
		$course_name = $_POST['course_name'];
		$lesson_name = $_POST['lesson_name'];
		$lesson_desc = $_POST['lesson_desc'];
		
		//image uploading 
		$lesson_link = $_FILES['lesson_link']['name'];
		$lesson_link_temp = $_FILES['lesson_link']['tmp_name'];
		$link_folder = '../lesson_vid/'.$lesson_link;
		move_uploaded_file($lesson_link_temp,$link_folder);

		//sql query
		$sql = "INSERT INTO `lessons`(`lesson_name`, `lesson_desc`, `lesson_link`, `course_id`, `course_name`) VALUES ('$lesson_name','$lesson_desc','$link_folder','$course_id','$course_name')";

		//execute the query
		$res = $conn->query($sql);

		if ($res == true) {
			# code...
			$_SESSION['course_id'] = $course_id;
			$_SESSION['course_name'] = $course_name;
			echo " <script type='text/javascript'>
 						alert('lesson Added Successfully ! ');
 					</script>";
		}else{
			echo " <script type='text/javascript'>
 						alert('Failed to add ! ');
 					</script>";			
		}
		
}
 ?>


