<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/registration.css">
    <style>
        .alredy{
            font-size: larger;
    color: firebrick;
    font-weight: 600;
        }
        h5{
            color:red;
            text-decoration: underline;
            font-weight: 600;
        }
       
    </style>
</head>
<body>
    
<div class="container">



        <form action="#" method="POST" enctype="multipart/form-data">
        <div class="title">
            Login form

            <h5>
                    <?php
                    error_reporting(0);
                    session_start();
                    session_destroy();
                        echo $_SESSION['loginMessage'];
                    ?>
                </h5>
        </div>


        <div class="form">
      
            <div class="input_field">
                <label>name</label>
                <input type="name" class="input" name="name" >
            </div>
      
            <div class="input_field">
                <label>Password</label>
                <input type="password" class="input" name="password" >
            </div>

      
      
           

            <div class="input_field">
                 <input type="submit" value="submit" class="btn" name="submit" `     >
         </div>


    </div>
    <p class="alredy" >Don't have an account? <a href="../registration.php"> Register here.</a></p>


    <?php
session_start();
include 'connection.php';
if($_SERVER['REQUEST_METHOD']=="POST"){
    $name=$_POST["name"];
    $password=$_POST["password"];
    $sql= "SELECT * FROM student WHERE stu_name = '$name' AND stu_pass='$password'";

    $result= mysqli_query($conn,$sql);
    $row= mysqli_fetch_array($result);

    if($row["usertype"]=="student"){
        $_SESSION['name']="$name";
        $_SESSION['usertype']="student";

        header("location:studentProfile.php");
    }
    elseif($row["usertype"]=="admin"){
        $_SESSION['name']=$name;
        $_SESSION['usertype']="admin";

        header("location:../Admin/admin-Home.php ");
    }
    else{
        $message="username or password do not match";
            $_SESSION['loginMessage']=$message;
            
            header("location:login.php");
    }
}

?>
</form>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0-beta3/js/bootstrap.bundle.min.js"></script>
</body>
</html>