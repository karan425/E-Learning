<!-- Start slick Slide  -->
<div class="container">
    <h1 class="text-center">Student Feedback</h1>
	<div class="row slider">
		<?php 
		include "dbcon.php";
		//SQL query
		$sql = "SELECT s.stu_name, s.stu_occ, s.stu_img, f.feedback FROM student AS s JOIN feedback AS f ON s.stu_id = f.stu_id";
		$res = mysqli_query($conn,$sql);
		$count = mysqli_num_rows($res);
		if ($count > 0) {
			// code...
			while ($rows = mysqli_fetch_assoc($res)) {
				// code...
				$stu_name = $rows['stu_name'];
				$stu_occ = $rows['stu_occ'];
				$stu_img = $rows['stu_img'];
				$stu_feedback = $rows['feedback'];
				?>
				<div class="col-md-12">
					<div class="details text-center">
						<img src="admin/<?php echo $stu_img; ?>">
						<h2><?php echo $stu_name; ?></h2>
						<p><?php echo $stu_feedback; ?></p>
						<h6><?php echo $stu_occ; ?></h6>
					</div>
				</div>
				<?php
			}
		}

		 ?>
	</div>
</div>
<!-- End slick Slide  -->