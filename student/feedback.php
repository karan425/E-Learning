<?php include "partial/header.php" ?>

<?php 

if (isset($_GET['stu_id'])) {
	// code...
	$stu_id = $_GET['stu_id'];
}
 ?>
<div class="col-sm-6 mt-5 mx-3 jumbotron">
	<form action="#" method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label for="stuID">Student ID</label>
			<input type="text" name="stuID" id="stuID" class="form-control" value="<?php echo $stu_id; ?>" readonly>
		</div>
		<div class="form-group">
			<label for="stuEmail">Write Feedback: </label>
			<textarea class="form-control" id="feedback" name="feedback" row="2"></textarea>
			
		</div>
		<div class="text-center">
			<button type="submit" class="btn btn-danger" id="feedbackSubmitBtn" name="feedbackSubmitBtn" >Submit</button>
		</div>
	</form>
</div>
</div>
</div>


<?php include "partial/footer.php" ?>

<?php 
include "../dbcon.php";

if (isset($_POST['feedbackSubmitBtn'])) {
	// code...
	$stu_id = $_POST['stuID'];
	$feedback = $_POST['feedback'];

	//sql query
	$sql = "INSERT INTO `feedback`(`feedback`, `stu_id`) VALUES ('$feedback','$stu_id')";
	//execute the query
	$res = mysqli_query($conn,$sql);
	if ($res == true) {
		// code...
		echo " <script type='text/javascript'>
 						alert('Feedback Send Successfully ! ');
 					</script>";
 		echo '<script type="text/javascript">
						window.location.href = "feedback.php";
					</script>';
	}
}


 ?>