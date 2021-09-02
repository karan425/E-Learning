<!-- Start navigatioon -->
<?php
    include ('partial/navbar.php');
?>
<!-- End navigatioon -->

<!-- start video background -->
<div class="container-fluid remove-vid-marg">
    <div class="vid-parent">
        <video playsinline autoplay muted loop>
            <source src="videos/banvid.mp4">
        </video>
        <div class="vid-overlay"></div>
    </div>
    <div class="vid-content">
        <h1 class="my-contnet">Welcome to Aaooo..</h1>
        <small class="my-contnet">Learn and Implement</small><br>
        <?php 
            if (!isset($_SESSION['is_login'])) {
                # code...
                echo '<button type="button" class="btn btn-danger mt-3 my-contnet" data-bs-toggle="modal" data-bs-target="#stuRegModelCenter" >Get Started</button>
                ';
            }else{
                echo '<a href="student/stuProfile.php" type="button" class="btn btn-primary mt-3">My Profile</a>';
            }
        ?>
    </div>
</div>
<!-- end video background -->
<!-- Start Text Banner -->
<div class="container-fluid bg-danger txt-banner">
    <div class="row bottom-banner">
        <div class="col-sm">
            <h5><i class="fas fa-book-open mr-3"></i>100+ Online Courses</h5>
        </div>
        <div class="col-sm">
            <h5><i class="fas fa-users mr-3"></i>Expert Instructors</h5>
        </div>
        <div class="col-sm">
            <h5><i class="fas fa-keyboard mr-3"></i>Lifetime Access</h5>
        </div>
        <div class="col-sm">
            <h5><i class="fas fa-rupee-sign mr-3"></i>Money Back Guarantee</h5>
        </div>
    </div>
</div>

<!-- End text Banner -->

<!-- Start most popular course -->
<?php
    include ('partial/popular-course.php');
?>
<!-- End most popular course -->

<!-- Start contect us -->
<?php
    include ('partial/contactus.php');
?>
<!-- End contect us -->

<!-- Start Student Feedback -->
<?php
    include ('partial/stufeedback.php');
?>
<!-- Start Student Feedback -->
<br><br>
<!-- Start social follow -->
<div class="coantainer-fulid bg-danger">
    <div class="row text-white text-center p-1">
        <div class="col-sm">
            <a href="#" class="text-white social-hover"><i class="fab fa-facebook"></i>Facebook</a>
        </div>
        <div class="col-sm">
            <a href="#" class="text-white social-hover"><i class="fab fa-twitter"></i>Twitter</a>
        </div>
        <div class="col-sm">
            <a href="#" class="text-white social-hover"><i class="fab fa-whatsapp"></i>WhatsApp</a>
        </div>
        <div class="col-sm">
            <a href="#" class="text-white social-hover"><i class="fab fa-instagram"></i>Instagram</a>
        </div>
    </div>
</div>
<!-- End social follow -->
<!-- Start  About Section -->
<div class="container-fluid p-4" style="background-color: #E9ECEF;">
<div class="container" style="background-color: #E9ECEF;">
    <div class="row text-center">
        <div class="col-sm">
            <h5>About Us</h5>
            <p>Aaooo procides universal access to the world's best education, partnaering with top universities and organization to offer courses online.</p>
        </div>
        <div class="col-sm">
            <h5>Catagory</h5>
            <a style="text-decoration: none;" href="#" class="text-dark">Web Development</a><br>
            <a style="text-decoration: none;" href="#" class="text-dark">Web Designing</a><br>
            <a style="text-decoration: none;" href="#" class="text-dark">Android App Dev</a><br>
            <a style="text-decoration: none;" href="#" class="text-dark"> iOS Development</a><br>
            <a style="text-decoration: none;" href="#" class="text-dark">Data Analysis</a><br>
        </div>
        <div class="col-sm">
            <h5>Contact Us</h5>
            <p>Aaooo.. Pvt Ltd <br> Near Lalbulding <br> Gamharia, Jharkhand <br>PIN- 832108<br> Ph. 8825394491 </p>
        </div>
    </div>
</div>
</div>
<!-- End About Section -->

<!-- Start Footer -->
<?php
    include ('partial/footer.php');
?>
<!-- End Footer -->


