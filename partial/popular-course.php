<!-- Start most popular course -->

<div class="container mt-5">
    <h1 class="text-center">Popular Course</h1>

    <!-- Start most popular course 1st card Dark -->
    <div class="card-deck mt-4">
        <?php 
        include "dbcon.php";
        //sql query
        $sql = "SELECT * FROM course LIMIT 3";
        //execute the query
        $res = mysqli_query($conn,$sql);
        //count the rows
        $count = mysqli_num_rows($res);
        if ($count > 0) {
            // code...
            while ($rows = mysqli_fetch_assoc($res)) {
                // code...
                $course_id =$rows['course_id'];
                $course_name = $rows['course_name'];
                $course_desc = $rows['course_desc'];
                $course_img = $rows['course_img'];
                $course_original_price = $rows['course_original_price'];
                $course_selling_price = $rows['course_price'];
                ?>
                <div class="card" >
                  <img src="admin/<?php echo $course_img; ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $course_name; ?></h5>
                    <p class="card-text"><?php echo $course_desc; ?></p>
                  </div>
                  <div class="card-footer">
                    <p class="card-tex d-inline">Price: <small><del>&#8377 <?php echo $course_original_price; ?></del></small><span class="font-weight-bolder"> &#8377 <?php echo $course_selling_price; ?></span></p>
                    <a href="coursedetails.php?course_id=<?php echo $course_id; ?>" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
                  </div>
                </div>
                <?php
            }
        }

         ?>
    </div>
 
    <!--End most popular course 1st card Dark  -->
     <!--start most popular course 2st card Dark  -->
     <div class="card-deck mt-4">
          <?php 
        include "dbcon.php";
        //sql query
        $sql = "SELECT * FROM course LIMIT 3,3";
        //execute the query
        $res = mysqli_query($conn,$sql);
        //count the rows
        $count = mysqli_num_rows($res);
        if ($count > 0) {
            // code...
            while ($rows = mysqli_fetch_assoc($res)) {
                // code...
                $course_name = $rows['course_name'];
                $course_desc = $rows['course_desc'];
                $course_img = $rows['course_img'];
                $course_original_price = $rows['course_original_price'];
                $course_selling_price = $rows['course_price'];
                ?>
                <div class="card">
                  <img src="admin/<?php echo $course_img; ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $course_name; ?></h5>
                    <p class="card-text"><?php echo $course_desc; ?></p>
                  </div>
                  <div class="card-footer">
                    <p class="card-tex d-inline">Price: <small><del>&#8377 <?php echo $course_original_price; ?></del></small><span class="font-weight-bolder"> &#8377 <?php echo $course_selling_price; ?></span></p>
                    <a href="coursedetails.php?course_id=<?php echo $course_id; ?>" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
                  </div>
                </div>
                <?php
            }
        }

         ?>
    </div>

      <!--End most popular course 2st card Dark  -->
      <div class="text-center m-4">
          <a href="courses.php" class="btn btn-danger btn-sm">View All Course</a>
      </div>
</div>
<!-- End most popular course -->