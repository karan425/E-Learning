<!-- Start header -->
<?php
include ("partial/navbar.php");
?>
<!-- End header -->
 <?php 

        include "dbcon.php";
        if (isset($_GET['course_id'])) {
            // code...
            $course_id = $_GET['course_id'];
        }
        //sql query
        $sql = "SELECT * from course WHERE course_id ='$course_id'";
        //execute the query
        $res = mysqli_query($conn,$sql);
        //count the rows
        $count = mysqli_num_rows($res);
        if ($count > 0) {
            // code...
            $rows = mysqli_fetch_assoc($res);
            //get the data from database
            $course_name = $rows['course_name'];
            $course_desc = $rows['course_desc'];
            $course_duration = $rows['course_duration'];
            $course_original_price = $rows['course_original_price'];
            $course_selling_price = $rows['course_price'];
            $course_img = $rows['course_img'];
        }


         ?>

<!-- Start course banner -->
<div class="container-fluid">
    <div class="row">
        <img src="image/coursebanner1.jpg" alt="course" style="padding: 0; height:270px; width:100%; object-fit:cover; box-shadow:10px;">
    </div>
</div>
<!-- End course banner -->
<!-- Start main content -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <img src="admin/<?php echo $course_img; ?>" alt="" class="card-img-top">
        </div>

        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title"><strong>Course Name:</strong> <?php echo $course_name; ?></h5>
                <p class="card-text"><strong>Description:</strong> <?php echo $course_desc; ?></p>
                <p class="card-text"><strong>Duration:</strong> <?php echo $course_duration; ?></p>
                <form action="" method="post">
                    <p class="card-text d-inline"><strong>Price:</strong> <small><del>&#8377 <?php echo $course_original_price; ?></del></small><span class="font-wight-bolder">  &#8377 <?php echo $course_selling_price; ?></span></p>
                    <a href="checkOut.php?price=<?php echo $course_selling_price; ?>&course_id=<?php echo $course_id; ?>" type="submit" class="btn btn-primary text-white font-weight-bolder float-right" name="buy">Buy Now</a>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <table class="table table-borderd  table-hover">
                <thead>
                    <tr>
                        <th scope="col">Lesson NO.</th>
                        <th scope="col">Leasson Name</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    //sql query
                    $sql2 = "SELECT lesson_name from lessons WHERE course_id = '$course_id' ORDER BY lesson_name DESC";
                    //execute the query
                    $res2 = mysqli_query($conn,$sql2);
                    //count the rows
                    $count2 = mysqli_num_rows($res2);
                    $ln = 1;
                    if ($count2 > 0) {
                        // code...
                        while ($row2 = mysqli_fetch_assoc($res2)) {
                            // code...
                            //get all the data from database
                            $lesson_name = $row2['lesson_name'];
                            ?>
                            <tr>
                                <th scope="row"><?php echo $ln++; ?></th>
                                <td><?php echo $lesson_name; ?></td>
                            </tr>
                            <?php
                        }                       
                    }

                     ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Start main content -->


<!-- Start footer -->
<?php
include ("partial/footer.php");
?>
<!-- End footer -->