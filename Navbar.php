<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Toggle Example</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/Navbar.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0-beta3/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg fixed-top nav">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="image/logo.png" alt="Logo" width="60" height="46" class="d-inline-block align-text-top">
            <span class="nav-t">Bootstrap</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="course.php">Course</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">ContactUs</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Programs
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <a href="login.php"><button type="button" class="btn btn-outline-success" >Login</button></a>
                <a href="registration.php"><button type="button" class="btn2 btn-outline-primary" >SignUp</button></a>
                
            </ul>
        </div>
    </div>
</nav>

<!-- jQuery and Bootstrap JS Bundle -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0-beta3/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const navbarToggler = document.querySelector(".navbar-toggler");
        const navbarMenu = document.querySelector(".navbar-collapse");

        navbarToggler.addEventListener("click", function () {
            navbarMenu.classList.toggle("show");
        });
    });
</script>

</body>
</html>
