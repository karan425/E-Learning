<!-- Modal -->
<div class="modal fade" id="stuRegModelCenter" tabindex="-1" aria-labelledby="stuRegModelCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuRegModelCenterLabel">Student Registration</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Start studet registration Form -->
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
        </form>
        <!-- End studet registration Form -->
      </div>
      <div class="modal-footer">
        <span id="successMsg"></span>
      <button type="button" class="btn btn-primary" onclick="addstu()" id="signup">Sign Up</button> 
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>