<?php include "partial/header.php" ?>


<div class="col-sm-9 mt-5">
	<!-- Table -->
	<p class="bg-dark text-white p-2 text-center">All Courses</p>

	<?php 
	include "../dbcon.php";

	if (isset($_SESSION['stuLogEmail'])) {
	  // code...
	  $stu_email = $_SESSION['stuLogEmail'];
	  //sql query
	  // $sql = "SELECT co.order_id, c.course_name, c.course_duration, c.course_img, c.course_author, c.course_original_price, c.course_price FROM courseorder AS co JOIN courses As C ON c.course_id = co.course_id WHERE co.stu_email = '$stu_email'";

	  $sql = "SELECT co.order_id, c.course_id, c.course_name, c.course_duration,c.course_desc, c.course_img, c.course_author, c.course_original_price, c.course_price FROM courseorder AS co JOIN course AS c ON c.course_id = co.course_id where co.stu_email = '$stu_email'";


	  $res = mysqli_query($conn,$sql);
	  $count = mysqli_num_rows($res);
	  if ($count > 0) {
	    // code...
	    while ($rows = mysqli_fetch_assoc($res)) {
	      // code...
	      $course_id = $rows['course_id'];
	      $course_name = $rows['course_name'];
	      $course_img = $rows['course_img'];
	      $course_desc = $rows['course_desc'];
	      $course_author = $rows['course_author'];
	      $course_duration = $rows['course_duration'];
	      $course_original_price = $rows['course_original_price'];
	      $course_selling_price = $rows['course_price'];
	      ?>

	<div class="card">
		<div class="row">
		    <div class="col-4">
	    		<img src="<?php echo $course_img; ?>" class="img-thumbnail">
		    </div>
		    <div class="col-8">
		    	<div class="card-body">
				   <p class="card-title"><?php echo $course_desc; ?></p>
		            <small class="form-text"><strong>Duration:</strong><?php echo $course_duration; ?></small>
		            <small class="form-text"><strong>Author:</strong><?php echo $course_author; ?></small>
		            <p class="card-text d-inline"><strong>Price:</strong> <small><del>&#8377 <?php echo $course_original_price; ?></del></small><span class="font-wight-bolder">  &#8377 <?php echo $course_selling_price; ?></span></p>
				 </div>
				 <a class="btn btn btn-primary text-white m-5 float-right" href="watchCourse.php?course_id=<?php echo $course_id; ?>">Watch Course</a>
		    </div>
		 </div>
	</div>

<?php
    }
  }
}

 ?>
	



<?php include "partial/footer.php" ?>