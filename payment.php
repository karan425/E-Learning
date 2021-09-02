<?php 

include "dbcon.php";
session_start();
if (!isset($_SESSION['is_login'])) {
  // code...
  header('location: index.php');
}else{

  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
<?php 

$order_id = $_SESSION['Order_id'];
//sql query
$sql = "SELECT * FROM courseorder WHERE order_id = '$order_id'";
$res = mysqli_query($conn,$sql);
$count = mysqli_num_rows($res);
if ($count > 0) {
  // code...
  $rows = mysqli_fetch_assoc($res);
  //get all the data from database
  $stu_email = $rows['stu_email'];
  $order_id = $rows['order_id'];
  $txn_amount = $rows['amount'];
  $course_id = $rows['course_id'];
  $date = $rows['order_date'];
  $time = $rows['order_time'];
  $status = $rows['status'];
}


 ?>
<div class="container mt-5" style="margin: auto; width: 50%; border: 3px solid black; padding: 10px;">
	<div class="card" style="width;">
  <div class="card-body">
    <h5 class="card-title text-center">Payment Status</h5>
    <h6 class="card-subtitle mb-2 text-muted text-center">please Save these data !!! </h6>
     <p class="card-text"><strong>Order ID:</strong> <?php echo $order_id; ?></p>
     <p class="card-text"><strong>Course ID:</strong> <?php echo $course_id; ?></p>
      <p class="card-text"><strong>Student Email:</strong> <?php echo $stu_email; ?></p>
      <p class="card-text"><strong>Amount:</strong> <?php echo $txn_amount; ?></p>
       <p class="card-text"><strong>Date and Time:</strong> <?php echo $date." ".$time; ?></p>
        <p class="card-text text-success"><strong >Statun:</strong > <?php echo $status; ?></p>
    <a type="button" href="index.php" class="btn btn-primary">Close</a>
  </div>
</div>
</div>

	

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
  <?php
}

 ?>