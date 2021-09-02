<?php include "partial/login_check.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- Font awsome css -->
    <link rel="stylesheet" href="../css/all.css">
        
    <title>Aaooo...</title>
</head>
<body>

<div class="container-fluid bg-success p-2">
    <h3>Walcome to Aaooo..</h3>
    <a class="btn btn-danger" href="myCourse.php">My Course</a>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 border-right">
            <h4 class="text-center">Lessons</h4>
            <ul id="playlist" class="nac flex-column">
                <?php 
                include "../dbcon.php";
                if (isset($_GET['course_id'])) {
                    // code...
                    $course_id = $_GET['course_id'];
                    $sql = "SELECT * from lessons WHERE course_id = '$course_id'";
                    $res = mysqli_query($conn,$sql);
                    $count = mysqli_num_rows($res);
                    if ($count > 0) {
                        // code...
                        while ($rows = mysqli_fetch_assoc($res)) {
                            // code...
                            $lesson_name = $rows['lesson_name'];
                            $lesson_link = $rows['lesson_link'];
                            ?>
                            <li class="na-item border-buttom py-2" movieurl="<?php echo $lesson_link; ?>" style="cursor:pointer;"><?php echo $lesson_name; ?></li> 
                            <?php
                        }
                    }
                }

                 ?>
                  
            </ul>
        </div>
        <div class="col-sm-8">
            <video class="mt-5 w-75 ml-2" id="videoarea" src="" controls=""></video>
        </div>
    </div>
</div>



<!-- java scripts -->
<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="../js/all.min.js"></script>
<script src="../js/coustom.js"></script>

</body>
</html>