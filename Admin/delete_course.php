<?php

session_start();
include 'connection.php';
if($_GET['course_id']){
    $user_id =$_GET['course_id'];

    $sql="DELETE FROM course WHERE id='$user_id'";

    $result=mysqli_query($conn,$sql);
    if($result){
        $_SESSION['message']='Delete Course Sucessfully';
        header("location: view-course.php");

    }
}
?>