<?php include "partial/header.php"; ?>

<div class="col-sm-9 mt-5">
	<!-- Table -->
	<p class="bg-dark text-white p-2">List of Courses</p>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">S.N</th>
				<th scope="col">Feedback</th>
				<th scope="col">Studnet ID</th>
				<th scope="col">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				include "../dbcon.php";
				//sql query
				$sql = "SELECT * FROM feedback";
				//execute the query
				$res = mysqli_query($conn,$sql);
				//count the rows
				$count = mysqli_num_rows($res);
				$sn = 1;
				if ($count>0) {
					// code...
					while ($row = mysqli_fetch_assoc($res)) {
						// code...
						$feedback_id = $row['fed_id'];
						$feedback = $row['feedback'];
						$stu_id = $row['stu_id'];
						?>
						<tr>
							<th scope="row"><?php echo $sn++; ?></th>
							<td><?php echo $feedback; ?></td>
							<td><?php echo $stu_id; ?></td>
							<td>
								<a href="deletefeedback.php?id=<?php echo $feedback_id; ?>" type="submit" class="btn btn-secondary" name="delete" value="Delete"><i class="far fa-trash-alt"></i></a></td>
						</tr>
						<?php
					}
				}
			 ?>
			
		</tbody>
	</table>
</div>
<?php include "partial/footer.php"; ?>