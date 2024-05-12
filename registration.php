<?php include("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/registration.css">
<style>
     .alredy{
            font-size: larger;
    color:#006248;
    font-weight: 600;
        }
</style>
    
</head>
<body background="image/green-gfaef715af_1920.jpg" class="body_deg">


    <div class="container">

        <form action="#" method="POST" enctype="multipart/form-data">
        <div class="title">
            Registration form
        </div>

        <div class="form">
           <!--  <div class="input_field">
                <label>Upload Image</label>
                <input type="file" name="uploadfile" style="width:100%;">
            </div> -->
      
        <div class="form">
            <div class="input_field">
                <label>Full Name</label>
                <input type="text" class="input" name="name" >
            </div>
      
            <div class="input_field">
                <label>Email Address</label>
                <input type="email" class="input" name="email" >
                
            </div>
      
            <div class="input_field">
                <label>Password</label>
                <input type="password" class="input" name="password" >
            </div>

      
      
            <div class="input_field">
                <label>Gender</label>
        
            </div>

            <div class="input_field">
                 <input type="submit" value="submit" class="btn" name="submit" `     >
         </div>

         <p class="alredy">Alredy have an account? <a href="login.php"> Login here.</a></p>

         <?php

if(isset($_POST['submit'])){
    $name =  $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $usertype="student";

    $errors= array();

    if(empty($name) OR empty($email) OR empty($password)){
        array_push($errors,"All fields are required");
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        array_push($errors,"Email is not vailid");
    }
    if(strlen($password)<8){
        array_push($errors,"Plese enter minimum 8 char");
    }
    $sql = "select * from student where `stu_email`='$email'";
    $result = mysqli_query($conn, $sql);
    $count_email = mysqli_num_rows($result);

    if($count_email>0){
        array_push($errors,"Email alredy Exist!");
    }
    
    if(count($errors)>0){
        foreach($errors as $error){
            echo "<div class='alert alert-danger'>$error</div>";
        }
       
    }else{
        require_once "connection.php";
        $sql= "INSERT INTO student (stu_name, stu_email, stu_pass,usertype)VALUES ('$name','$email','$password','$usertype')";
        $result = mysqli_query($conn, $sql);
        if($result){
                        echo '<script> 
                           
                            //  window.location.href= "index.php"
                            </script>';
        
                        echo "<div class='alert alert-success'>You are registerd Sucessfully.</div>";
                     
                    } else {
                        echo '<script> 
                            alert("Error occurred while registering!");
                            window.location.href= "registration.php"
                            </script>';
                    }
                  
    }

}

?>




    </div>
</form>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0-beta3/js/bootstrap.bundle.min.js"></script>

</body>
</html>



<?php
    if(isset($_POST['submit']))
    {
        include "connection.php";
        $name =  $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

      


        $errors= array();
     
       
        $sql = "select * from student where `stu_name`='$name'";
        $result = mysqli_query($conn, $sql);
        $count_user = mysqli_num_rows($result);

        $sql = "select * from student where `stu_email`='$email'";
        $result = mysqli_query($conn, $sql);
        $count_email = mysqli_num_rows($result);

       
        if($count_user === 0 && $count_email === 0){
            $sql = "insert into student(stu_name, stu_email, stu_pass,usertype) values ('$name','$email','$password','student')";
            $result = mysqli_query($conn, $sql);
            
            if($result){
                // echo '<script> 
                   
                //     window.location.href= "index.php"
                //     </script>';

                echo "<div class='alert alert-success'>You are registerd Sucessfully.</div>";
            } else {
                echo '<script> 
                    alert("Error occurred while registering!");
                    window.location.href= "registration.php"
                    </script>';
            }
        }
        else{
            echo '<script> 
                alert("User or Email already exists!!!");
                window.location.href= "registration.php"
                </script>';
        }
        
    }

?>












