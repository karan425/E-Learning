<?php include "partial/header.php" ?>

<div class="col-sm-9 mt-5 mx-3">
	<form method="POST" action="" class="mt-3 form-inline d-print-none">
		<div class="form-group mr-3">
			<label for="checkid">Enter Course ID: </label>
			<input class="form-control ml-3" type="text" id="ckeckid" name="checkid"></input>
		</div>
		<button class="btn btn-danger" type="submit" name="search">Search</button>
	</form>
		<?php 
		if (!isset($_SESSION)) {
			// code...
			session_start();
			$adminLogEmail = $_SESSION['adminLogEmail'];
		}else{
			if (isset($_SESSION['course_id']) && isset($_SESSION['course_name'])) {
				// code...
				$course_id = $_SESSION['course_id'];
				$course_name = $_SESSION['course_name'];
				unset($_SESSION['course_id']);
				unset($_SESSION['course_name']);
			}
			
		}
		include "../dbcon.php";
		if (isset($_POST['search'])) {
			// code...
			$course_id = $_POST['checkid'];
			$sql = "SELECT * FROM course WHERE course_id = '$course_id'";
			$res = mysqli_query($conn,$sql);
			if ($row = mysqli_fetch_assoc($res)) {
				// code...
				$course_id = $row['course_id'];
				$course_name = $row['course_name'];

				// $_SESSION['course_id']=$course_id;
				// $_SESSION['course_name'] = $course_name;
			}
		}
		if (isset($course_id) && isset($course_name)) {
			// code...
			?>
			<div class=" mt-5 text-center">
			      <!-- Table -->
			      <p class="bg-dark text-white p-2">Course ID: <?php if(isset($course_id)){echo $course_id;} ?>-----Course Name: <?php if(isset($course_name)){echo $course_name;} ?></p>

			      <table class="table">
			         <thead>
			            <tr>
			               <th scope="col">S.N</th>
			               <th scope="col">Lesson Name</th>
			               <th scope="col">Action</th>
			            </tr>
			         </thead>
			         <tbody>
			         	<?php 

			         	$sql2 = "SELECT * FROM lessons WHERE course_id = '$course_id' ORDER BY lesson_name DESC";
			         	$res2 = mysqli_query($conn,$sql2);
			         	$count = mysqli_num_rows($res2);
			         	$sn = 1;
			         	if ($count>0) {
			         		// code...
			         		while ($rows = mysqli_fetch_assoc($res2)) {
			         			// code...
			         		$lesson_id = $rows['lesson_id'];
			         		$lesson_name = $rows['lesson_name'];
			         		?>
			         		<tr>
				               <td><?php echo $sn++; ?></td>
				               <td><?php echo $lesson_name; ?></td>
				               <td>
								<a href="deleteLesson.php?id=<?php echo $lesson_id; ?>&course_id=<?php echo $course_id; ?>&course_name=<?php echo $course_name ?>" type="submit" class="btn btn-secondary" name="delete" value="Delete"><i class="far fa-trash-alt"></i></a></td>
				            </tr>
			         		<?php
			         		}
			         	}
			         

			         	 ?>
			            
			         </tbody>
			      </table>
			   </div>
			   <div>
				 	<a class="btn btn-danger box" href="addLesson.php?course_id=<?php echo $course_id; ?>&course_name=<?php echo $course_name; ?>"><i class="fas fa-plus fa-2x"></i></a>
				</div>
			</div>
			<?php
		}

		 ?>

<?php include "partial/footer.php" ?>