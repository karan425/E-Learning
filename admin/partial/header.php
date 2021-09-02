<?php include "login_check.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Font awsome css -->
    <link rel="stylesheet" href="../css/all.css">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <!-- style css -->
    <link rel="stylesheet" href="../css/adminstyle.css">
    
</head>
<body>
   <!-- Top Navbar -->
   <nav class="navbar navbar-dark fixed-top p-0 shadow" style="background-color: #225470;">
      <a class="navbar-brand col-sm-md-2 mr-0 p-3" href="adminDeshborad.php">Aaaooo... <small class="text-muted h4">Admain Area</small></a>
   </nav>

   <!-- Side Bar -->
   <div class="container-fluid mb-5" style="margin-top: 40px;">
      <div class="row">
         <nav class="col-sm-3 col-md-2 bg-light sidebar py-5 d-print-none">
            <div class="sidebar-sticky">
               <ul class="nav flex-column">
                  <li class="nav-item">
                     <a class="nav-link" href="adminDeshborad.php">
                        <i class="fas fa-tachometer-alt"></i>Dashboard
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="courses.php">
                        <i class="fab fa-accessible-icon"></i>Courses
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="lessons.php">
                        <i class="fab fa-accessible-icon"></i>Lessons
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="Student.php">
                        <i class="fas fa-users"></i>Students
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="adminDeshborad.php">
                        <i class="fas fa-table"></i>Sell Report
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="adminDeshborad.php">
                        <i class="fas fa-table"></i>Payment Status
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="feedback.php">
                        <i class="fab fa-accessible-icon"></i>Feedback
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="adminChangePass.php">
                        <i class="fas fa-key"></i>Change Password
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="../logout.php">
                        <i class="fas fa-sign-out-alt"></i>Logout
                     </a>
                  </li>
               </ul>
            </div>
         </nav>