<!-- Start header -->
<?php
include ("partial/navbar.php");
?>
<!-- End header -->
<!-- Start banner -->
<div class="container-fluid bg-dark">
    <div class="row"><img src="image/coursebanner1.jpg" alt="course" style="padding: 0; height:500px; width:100%; object-fit:cover; box-shadow:10px;">
    </div>
</div>
<!-- End  banner -->
<!-- Start payment content -->
<div class="container">
    <h2 class="text-center my-4">Payment Status</h2>
    <form action="" method="post">
        <div class="row justify-content-md-center">
            <div class="col col-lg-2 text-center">
                <lable class="offset-sm-3 col-form-label ">Order ID: </lable>
            </div>
            <div class="col-md-auto">
                <input type="text" name="" id="" class="form-control">
            </div>
            <div class="col col-lg-2 text-center">
                <input type="submit" value="View" class="btn btn-primary">
            </div>
        </div>
    </form>
</div>
<!-- end payment content -->


<!-- Start contect us -->
<?php
    include ('partial/contactus.php');
?>
<!-- End contect us -->

<!-- Start footer -->
<?php
include ("partial/footer.php");
?>
<!-- End footer -->