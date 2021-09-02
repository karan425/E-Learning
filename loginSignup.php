<!-- Start header -->
<?php
include ("partial/navbar.php");
?>
<!-- End header -->

<!-- Start course banner -->
<div class="container-fluid bg-dark">
    <div class="row">
        <img src="image/coursebanner2.jpg" alt="course" style=" padding: 0;height:300px; width:100%; object-fit:cover; box-shadow:10px;">
    </div>
</div>
<!-- End course banner -->

<div class="container jumbotron mb-5">
    <div class="row">
        <div class="col-md-4">
            <h5 class="mb-3">If Already Registered !! Login</h5>
            <form id="stuloginForm">
                <div class="form-group">
                  <i class="fas fa-envelope"></i><label for="stuloginemail" class="pl-2 font-weight-bold">E-mail</label>
                  <input type="text" name="stuloginemail" id="stuloginemail" class="form-control" placeholder="Enter your email" aria-describedby="helpId">
                </div>
                <div class="form-group">
                  <i class="fas fa-key"></i><label for="stuloginpass" class="pl-2 font-weight-bold">Password</label>
                  <input type="password" name="stuloginpass" id="stuloginpass" class="form-control" placeholder="Enter new password" aria-describedby="helpId">
                </div>
                <button type="button" class="btn btn-primary" onclick="loginstu()" id="stuloginBtn" >Login</button>
            </form><br>
            <small id="validationLogMsg"></small>
        </div>
        <div class="col-md-6 offse-md-1">
            <h5 class="mb-3">New User !! Sign Up</h5>
            <form id="StuGegForm">
                <div class="form-group">
                  <i class="fas fa-user"></i><label for="sturegname" class="pl-2 font-weight-bold">Name</label>
                  <small id="validationMsg1"></small>
                  <input type="text" name="sturegname" id="sturegname" class="form-control" placeholder="Enter your name" aria-describedby="helpId">
                </div>
                <div class="form-group">
                  <i class="fas fa-envelope"></i><label for="sturegemail" class="pl-2 font-weight-bold">E-mail</label>
                  <small id="validationMsg2"></small>
                  <input type="text" name="sturegemail" id="sturegemail" class="form-control" placeholder="Enter your email" aria-describedby="helpId">
                  <small class="form-text">We'll never share your email with anyone elae.</small>
                </div>
                <div class="form-group">
                  <i class="fas fa-key"></i><label for="stpass" class="pl-2 font-weight-bold">Password</label>
                  <small id="validationMsg3"></small>
                  <input type="password" name="sturegpass" id="sturegpass" class="form-control" placeholder="Enter new password" aria-describedby="helpId">
                </div>
                <button type="button" class="btn btn-primary" onclick="addstu()" id="signup">Sign Up</button>
            </form><br>
            <span id="successMsg"></span>
        </div>
    </div>
</div>
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