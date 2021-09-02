<?php include "partial/header.php" ?>


<div class="col mt-5">
   <div class="row mx-5 text-center">
      <?php 
      include "../dbcon.php";
      $sql = "SELECT * FROM course";
      $res = mysqli_query($conn,$sql);
      $count = mysqli_num_rows($res);
       ?>
      <div class="col-sm-4 mt-5">
         <div class="card text-white bg-danger mb-3" style="max-width: 20rem;">
            <div class="card-header">Courses</div>
            <div class="card-body">
               <h4 class="card-title"><?php echo $count; ?></h4>
               <a class="btn text-white" href="courses.php">View</a>
            </div>
         </div>
      </div>
      <?php 
      include "../dbcon.php";
      $sql2 = "SELECT * FROM student";
      $res2 = mysqli_query($conn,$sql2);
      $count2 = mysqli_num_rows($res2);
       ?>

      <div class="col-sm-4 mt-5">
         <div class="card text-white bg-success mb-3" style="max-width: 20rem;">
            <div class="card-header">Student</div>
            <div class="card-body">
               <h4 class="card-title"><?php echo $count2; ?></h4>
               <a class="btn text-white" href="Student.php">View</a>
            </div>
         </div>
      </div>
      <div class="col-sm-4 mt-5">
         <div class="card text-white bg-info mb-3" style="max-width: 20rem;">
            <div class="card-header">Sold</div>
            <div class="card-body">
               <h4 class="card-title">3</h4>
               <a class="btn text-white" href="#">View</a>
            </div>
         </div>
      </div>
   </div>
   <div class="mx-5 mt-5 text-center">
      <!-- Table -->
      <p class="bg-dark text-white p-2">Course Ordered</p>
      <table class="table">
         <thead>
            <tr>
               <th scope="col">Order ID</th>
               <th scope="col">Course ID</th>
               <th scope="col">Student Email</th>
               <th scope="col">Order Data</th>
               <th scope="col">Amount</th>
               <th scope="col">Action</th>
            </tr>
         </thead>
         <tbody>
            <tr>
               <th scope="row">22</th>
               <td>100</td>
               <td>k@gmail.com</td>
               <td>15/7/2021</td>
               <td>2000</td>
               <td><button class="btn btn-secondary" type="submit" name="delete" value="Delete"><i class="far fa-trash-alt"></i></button></td>
            </tr>
         </tbody>
      </table>
   </div>
</div>
</div>
</div>


<?php include "partial/footer.php" ?>