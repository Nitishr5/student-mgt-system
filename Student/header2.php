<?php
include_once('connection.php');
// session_start();
if(!isset($_SESSION['name']))
        {
            header("location:login2.php");
        }
        elseif($_SESSION['usertype']=='admin')
        {
            header("location:login2.php");
        }


        $name=$_SESSION['name'];
        $sql="SELECT * FROM student WHERE stu_name='$name' ";
        $result=mysqli_query($conn,$sql);
        
        $info=mysqli_fetch_assoc($result);
        $stu_img=$info['image'];
        
        


       

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../css/header2.css">
</head>
<body>
    <!-- Top Navbar -->
    <nav class="navbar navbar-dark fixed-top flex-md-nowrap p-0 shadow"
    style="background-color:#225470;" >
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="studentProfile.php">E-Learning <small class="text-white">Student Area</small></a>
    </nav>

     <!-- side Bar -->
     <aside>
     <div class="container-fluid mb-5" style="margin-top:60px; background:red;">
    <div class="row">
        <nav class="col-sm-2 bg-light sidebar py-5 d-print-none">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item mb-3">
                        <img src="<?php echo $stu_img; ?>" alt="studentimg" class="img-thumbnail rounded-circle">
                    </li>
                    <li class="nav-item">
                        <h3>
                        <?php echo "{$info['stu_name']}" ?>
                        </h3>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="studentProfile.php">
                        <i class="fas fa-user"></i>
                            Profile <span class="sr-only">(current)</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="mycourse.php">
                        <i class="fab fa-accessible-icon"></i>
                            My Courses
                        </a>
                    </li>

                  

                    <li class="nav-item">
                        <a class="nav-link" href="../student/stufeedback.php">
                            <i class="fab fa-accessible-icon"></i>
                            Feedback
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="studentchangepass.php">
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
                </ul>
            </div>
        </nav>
    </aside>
</body>
</html>