<?php include "partial/header.php" ?>


<div class="col-sm-9 mt-5">
	<!-- Table -->
	<p class="bg-dark text-white p-2">List of Courses</p>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">S.N</th>
				<th scope="col">Name</th>
				<th scope="col">Author</th>
				<th scope="col">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				include "../dbcon.php";
				//sql query
				$sql = "SELECT * FROM course";
				//execute the query
				$res = mysqli_query($conn,$sql);
				//count the rows
				$count = mysqli_num_rows($res);
				$sn = 1;
				if ($count>0) {
					// code...
					while ($row = mysqli_fetch_assoc($res)) {
						// code...
						$course_id = $row['course_id'];
						$course_name = $row['course_name'];
						$course_author = $row['course_author'];
						?>
						<tr>
							<th scope="row"><?php echo $course_id; ?></th>
							<td><?php echo $course_name; ?></td>
							<td><?php echo $course_author; ?></td>
							<td><a href="updateCourse.php?id=<?php echo $course_id; ?>" type="submit" class="btn btn-info mr-3" name="view" value="view"><i class="fas fa-pen"></i></a>
								<a href="deleteCourse.php?id=<?php echo $course_id; ?>" type="submit" class="btn btn-secondary" name="delete" value="Delete"><i class="far fa-trash-alt"></i></a></td>
						</tr>
						<?php
					}
				}
			 ?>
			
		</tbody>
	</table>
	<div>
 	<a class="btn btn-danger box" href="addCourse.php"><i class="fas fa-plus fa-2x"></i></a>
 	</div>
</div>
 
<?php include "partial/footer.php" ?>