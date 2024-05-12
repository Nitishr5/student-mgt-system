<?php
include 'sidebar.php';

include 'connection.php';
session_start();
error_reporting(0);


if($_GET['course_id']){
$id=$_GET['course_id'];
$sql="SELECT * FROM course WHERE id='$id' ";
$result=mysqli_query($conn,$sql);
$info=$result->fetch_assoc();
}

if(isset($_POST['update'])){
    $id =$_POST['id'];
    $name=$_POST['name'];
    $desc=$_POST['description'];
    $price=$_POST['price'];
    $lesson=$_POST['lesson'];
    $file=$_FILES['image']['name'];

    $dst="./image/".$file;

    $dst_db="image/".$file;


    move_uploaded_file($_FILES['image']['tmt_name'],$dst);

    $sql2="UPDATE course SET name='$name',description='$desc',price='$price',lesson='$lesson',image='$dst_db' WHERE id='$id'";
    // if($file){
    //     $query=
    // }
    // else{
    //     $query="UPDATE course SET name='$name',description='$desc' WHERE id='$id'";
    // }
    
    $result2=mysqli_query($conn,$sql2);
    
        if($result2)
        {
            $msg = '<div class="alert alert-sucess col-sm-6 ml-5 mt-2" role="alert"> Update Sucessfully !</div>';
          
        }
    
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
     <style>
             label{
            display:inline-block;
            text-align:right;
            width:100px;
            padding-top:10px;
            padding-bottom:10px;
        }
        .div_deg{
            background-color:skyblue;
            width:500px;
            padding-top:70px;
            padding-bottom:70px;
        }
        </style>
</style>
<body>
    
<div class="content">
        <center>
      <h1>Update Course Data</h1>

      <div class="div_deg">
        <form action="update_course.php" method="POST" enctype="multipart/form-data">
           
        <input type="text" name="id" value="<?php
       echo "{$info['id']}" ?>" hidden>
        <div>
                <label>Name :</label>
                <input type="text" name="name" value="<?php echo "{$info['name']}" ?>">
            </div><br>
            <div>
                <label for="">Course Description:</label>
                <textarea name="description" rows="2">
                <?php echo "{$info['description']}" ?>
            </textarea>
            </div>
            <div>
                <label>Price :</label>
                <input type="text" name="price" value="<?php echo "{$info['price']}" ?>">
            </div><br>
            <div>
                <label>Lesson :</label>
                <input type="text" name="lesson" value="<?php echo "{$info['lesson']}" ?>">
            </div><br>
            <div>
                <label for="">course old Image </label>
                <img width="100px" height="100px" src="<?php echo "{$info['image']}" ?>">
            </div>

            <div>
                <label for="">Course New Image :</label>
                <input type="file" name="image">
            </div><br>
            <div>
                
                <input type="submit" class="btn btn-primary" name="update" value="Update Course">
            </div><br>
        </form>
    </center>
      </div>
</body>
</html>