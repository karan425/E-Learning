<?php include "login_check.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- Font awsome css -->
    <link rel="stylesheet" href="../css/all.css">
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <!-- style css -->
	<link rel="stylesheet" href="../css/adminstyle.css">    
    <title>Aaooo...</title>
</head>
<body>
	 <!-- Top Navbar -->
   <nav class="navbar navbar-dark fixed-top p-0 shadow" style="background-color: #225470;">
      <a class="navbar-brand col-sm-md-2 mr-0 p-3" href="../index.php">Aaooo... </a>
   </nav>

<?php 
if (!isset($_SESSION)) {
	// code...
	session_start();
}
include "../dbcon.php";

$stu_email = $_SESSION['stuLogEmail'];
//sql query
$sql = "SELECT * FROM student WHERE stu_email = '$stu_email'";
//execute the query
$res = mysqli_query($conn,$sql);
$count = mysqli_num_rows($res);
if ($count > 0) {
	// code...
	$rows = mysqli_fetch_assoc($res);
	$stu_id = $rows['stu_id'];
	$stu_img = $rows['stu_img'];
}

 ?>


<!-- Side Bar -->
<div class="container-fluid mb-5" style="margin-top: 40px;">
  	<div class="row">
     	<nav class="col-sm-3 col-md-2 bg-light sidebar py-5 d-print-none">
	        <div class="sidebar-sticky">
	        	<ul class="nav flex-column">
	        		<li class="nav-item mb-3">
	        			<?php 
	        				if (isset($stu_img)) {
	        					// code...
	        					?>
	        					<img src="<?php echo $stu_img; ?>" class="img-thumbnail rounded-circle"></img>
	        					<?php
	        				}else{
	        					?>
	        					<img src="" alt="Image is not Uploded" class="img-thumbnail rounded-circle"></img>
	        					<?php
	        				}

	        			 ?>
	        			
	        		</li>
	        		<li class="nav-item ">
	        			<a href="stuProfile.php" class="nav-link"><i class="fas fa-user"></i><span class="sr-only">(current)</span> Profile</a>
	        		</li>
	        		<li class="nav-item">
	        			<a class="nav-link" href="myCourse.php"><i class="fab fa-accessible-icon"></i>My Courses</a>
	        		</li>
	        		<li class="nav-item">
	        			<a class="nav-link" href="feedback.php?stu_id=<?php echo $stu_id; ?>"><i class="fab fa-accessible-icon"></i>Feednack</a>
	        		</li>
	        		<li class="nav-item">
	        			<a class="nav-link" href="stuChangePass.php?stu_id=<?php echo $stu_id; ?>"><i class="fas fa-key"></i>Change Password</a>
	        		</li>
	        		<li class="nav-item">
	        			<a class="nav-link" href="../logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
	        		</li>
	        	</ul>
	        </div>	
     	</nav>