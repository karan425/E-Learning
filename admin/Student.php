<?php include "partial/header.php" ?>


<div class="col-sm-9 mt-5">
	<!-- Table -->
	<p class="bg-dark text-white p-2">List of Students</p>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">Student ID</th>
				<th scope="col">Name</th>
				<th scope="col">Email</th>
				<th scope="col">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				include "../dbcon.php";
				//sql query
				$sql = "SELECT * FROM student";
				//execute the query
				$res = mysqli_query($conn,$sql);
				//count the rows
				$count = mysqli_num_rows($res);
				
				if ($count>0) {
					// code...
					while ($row = mysqli_fetch_assoc($res)) {
						// code...
						$stu_id = $row['stu_id'];
						$stu_name = $row['stu_name'];
						$stu_email = $row['stu_email'];
						?>
						<tr>
							<th scope="row"><?php echo $stu_id; ?></th>
							<td><?php echo $stu_name; ?></td>
							<td><?php echo $stu_email; ?></td>
							<td><a href="updateStudent.php?id=<?php echo $stu_id; ?>" type="submit" class="btn btn-info mr-3" name="view" value="view"><i class="fas fa-pen"></i></a>
								<a href="deleteStudent.php?id=<?php echo $stu_id; ?>" type="submit" class="btn btn-secondary" name="delete" value="Delete"><i class="far fa-trash-alt"></i></a></td>
						</tr>
						<?php
					}
				}
			 ?>
			
		</tbody>
	</table>
	<div>
 	<a class="btn btn-danger box" href="addStudent.php"><i class="fas fa-plus fa-2x"></i></a>
 	</div>
</div>
 
<?php include "partial/footer.php" ?>