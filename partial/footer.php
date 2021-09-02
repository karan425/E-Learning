<!-- Start Footer -->
<footer class="container-fulid bg-dark text-center p-2">
    <small class="text-white">Copyfight &copy; 2021 !! Designed By Karan Gorai !! <a href="#login" data-bs-toggle="modal" data-bs-target="#adminloginModelCenter">Admin Login</a></small>
</footer>
<!-- End Footer -->

<!--Start Studet Registration Model  -->
<?php include 'sturegform.php' ?>
<!--End Studet Registration Model  -->

<!--Start Studet Login Model  -->
<!-- Modal -->
<div class="modal fade" id="stuloginModelCenter" tabindex="-1" aria-labelledby="stuloginModelCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuloginModelCenterLabel">Student Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"  onclick="stuLogClear()"></button>
      </div>
      <div class="modal-body">
        <!-- Start studet Login Form -->
        <form id="stuloginForm">
            <div class="form-group">
              <i class="fas fa-envelope"></i><label for="stuloginemail" class="pl-2 font-weight-bold">E-mail</label>
              <input type="text" name="stuloginemail" id="stuloginemail" class="form-control" placeholder="Enter your email" aria-describedby="helpId">
            </div>
            <div class="form-group">
              <i class="fas fa-key"></i><label for="stuloginpass" class="pl-2 font-weight-bold">Password</label>
              <input type="password" name="stuloginpass" id="stuloginpass" class="form-control" placeholder="Enter new password" aria-describedby="helpId">
            </div>
        </form>
        <!-- End studet Login Form -->
      </div>
      <div class="modal-footer">
        <small id="validationLogMsg"></small>
      <button type="button" class="btn btn-primary" onclick="loginstu()" id="stuloginBtn" >Login</button> 
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="stuLogClear()">Cancel</button>
      </div>
    </div>
  </div>
</div>
<!--End Studet Login Model  -->

<!--Start Admin Login Model  -->
<!-- Modal -->
<div class="modal fade" id="adminloginModelCenter" tabindex="-1" aria-labelledby="adminloginModelCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="adminloginModelCenterLabel">Admin Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="adminLogClear()"></button>
      </div>
      <div class="modal-body">
        <!-- Start Admin Login Form -->
        <form id="adminloginForm">
            <div class="form-group">
              <i class="fas fa-envelope"></i><label for="adminloginemail" class="pl-2 font-weight-bold">E-mail</label>
              <input type="text" name="adminloginemail" id="adminloginemail" class="form-control" placeholder="Enter your email" aria-describedby="helpId">
            </div>
            <div class="form-group">
              <i class="fas fa-key"></i><label for="adminloginpass" class="pl-2 font-weight-bold">Password</label>
              <input type="password" name="adminloginpass" id="adminloginpass" class="form-control" placeholder="Enter new password" aria-describedby="helpId">
            </div>
        </form>
        <!-- End Admin Login Form -->
      </div>
      <div class="modal-footer">
        <small id="adminValidLogMsg"></small>
      <button type="button" class="btn btn-primary" id="stuloginBtn" onclick="loginadmin()">Login</button> 
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="adminLogClear()">Cancel</button>
      </div>
    </div>
  </div>
</div>
<!--End Admin Login Model  -->

<!-- java scripts -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="js/all.min.js"></script>

<!-- Slick -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js/slick-slider.js"></script>

<!-- student ajax call javascript -->
<script type="text/javascript" src="js/ajaxrequest.js"></script>
<script type="text/javascript" src="js/adminajaxrequest.js"></script>
</body>
</html>