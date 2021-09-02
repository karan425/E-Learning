<?php 

include "dbcon.php";
session_start();
if (!isset($_SESSION['is_login'])) {
	// code...
	header('location: loginSignup.php');
}else{

	$course_price = $_GET['price'];
	$course_id = $_GET['course_id'];
	$stu_email = $_SESSION['stuLogEmail'];
	date_default_timezone_set('Asia/Kolkata');
	$date = date("Y-m-d");
	$time = date("h:i:sa");


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Check Out</title>
	<!-- Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="payment.php">
</head>
<body>
	
<div class="container mt-5">
	<div class="row">
		<div class="col-sm-6 offset-sm-3 jumbotron">
			<h3 class="mb-5 text-center">Welcome to Aaoo.. Payment Page</h3>
			<form method="POST" action="#">
				<div class="form-group row">
					<label for="ORDER_ID" class="col-sm-4 col-form-label">ORDER ID</label>
					<div class="col-sm-8">
						<input class="form-control" name="ORDER_ID" id="ORDER_ID" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php echo  "ORDS" . rand(10000,99999999)?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="CUST_ID" class="col-sm-4 col-form-label">Student Email</label>
					<div class="col-sm-8">
						<input id="CUST_ID" name="CUST_ID" class="form-control" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="<?php echo $stu_email; ?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="TXN_AMOUNT" class="col-sm-4 col-form-label">Amount</label>
					<div class="col-sm-8">
						<input class="form-control" title="TXN_AMOUNT" tabindex="10"
						type="text" name="TXN_AMOUNT"
						value="<?php echo $course_price; ?>">
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-8">
						<input type="hidden" name="course_id" value="<?php echo $course_id; ?>">
						<input type="hidden" id="date" name="date" value="<?php echo $date; ?>">
						<input type="hidden" name="time" value="<?php echo $time; ?>">
						<input type="hidden" name="success" value="SUCCESS">
					</div>
				</div>

				<!-- <div class="form-group row">
					<div class="col-sm-8">
						<input type="hidden" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-8">
						<input type="hidden" id="CHANNEL_ID" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
					</div>
				</div> -->
				<div class="text-center">
					<input type="submit" name="payment" class="btn btn-primary" value="Check Out">
					<a class="btn btn-secondary" href="./courses.php">Cancle</a>
				</div>

			</form>
			<small class="form-text text-center text-muted">Note: Complete Payment by Clicking Chechout Button</small>
		</div>
	</div>
</div>
<?php 
if (isset($_POST['payment'])) {
  // code...
  $stu_email = $_SESSION['stuLogEmail'];
  $order_id = $_POST['ORDER_ID'];
  $txn_amount = $_POST['TXN_AMOUNT'];
  $course_id = $_POST['course_id'];
  $date = $_POST['date'];
  $time = $_POST['time'];
  $status = $_POST['success'];

  //SQL query
  $sql = "INSERT INTO `courseorder`(`order_id`, `stu_email`, `course_id`, `amount`, `status`, `order_date`, `order_time`) VALUES ('$order_id','$stu_email','$course_id','$txn_amount','$status','$date','$time')";
  //execute the query
  $res = mysqli_query($conn,$sql);
  if ($res == true) {
    // code...
    $_SESSION['Order_id'] = $order_id;
    echo " <script type='text/javascript'>
 						alert('Course Ordered Successfully ! ');
 			</script>"; 
    echo '<script type="text/javascript">
						window.location.href = "payment.php";
			</script>';

    
  }

}


 ?>

<script src="js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>


	<?php
}

 ?>

