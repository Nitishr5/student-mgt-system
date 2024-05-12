<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="admin-Home.css">
</head>
<body>
    <!-- Top Navbar -->
    <nav class="navbar navbar-dark fixed-top p-0 shadow"
    style="background-color:#225470;" >
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="admin-Home.php">E-Learning <small class="text-white">Admin Area</small></a>
    </nav>

    <!-- side Bar -->

    <div class="container-fluid mb-5" style="margin-top:40px;">
    <div class="row">
        <nav class="col-sm-3 col-md-2 bg-light sidebar py-5 d-print-none">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="admin-Home.php">
                            <i class="fas fa-tachometer-alt"></i>
                            Dashboard
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="course.php">
                        <i class="fab fa-accessible-icon"></i>
                            Courses
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="add-course.php">
                        <i class="fab fa-accessible-icon"></i>
                            Add Courses
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="lesson.php">
                        <i class="fab fa-accessible-icon"></i>
                            Lesson
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="student.php">
                            <i class="fas fa-users"></i>
                            Students
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../Admin/view-contact.php">
                            <i class="fas fa-table"></i>
                            Contact Us
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="admin-Home.php">
                            <i class="fas fa-table"></i>
                            Payment Status
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="admin-Home.php">
                            <i class="fab fa-accessible-icon"></i>
                            Feedback
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="admin-Home.php">
                            <i class="fas fa-key"></i>
                            Change Password
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="admin-Home.php">
                            <i class="fas fa-sign-out-alt"></i>
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- side Bar -->

        <div class="container-fluid mb-5" style="margin-top:40px;">
    <div class="row">
        <nav class="col-sm-2  bg-light sidebar py-5 d-print-none">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item mb-3">
                        <img src="<?php echo $stu_img ?>" alt="studentimage" class="img-thumbnail rounded-circle">
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="studentProfile.php">
                        <i class="fas fa-user"></i>
                            Profile <span class="sr-only">(current)</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="">
                        <i class="fab fa-accessible-icon">
                            MY Courses
                        </i>
                           
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="stufeedback.php">
                        <i class="fab fa-accessible-icon"></i>
                            Feedback
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="student.php">
                            <i class="fas fa-key"></i>
                            Change Password
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../logout.php">
                            <i class="fas fa-sign-out-alt"></i>
                           Logout
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="admin-Home.php">
                            <i class="fas fa-table"></i>
                            Payment Status
                        </a>
                    </li>

                  
                </ul>
            </div>
</nav>