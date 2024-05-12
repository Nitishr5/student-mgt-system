<?php
// error_reporting(0);
    session_start();
    if(!isset($_SESSION['name']))
    {
        header("location:../login.php");
    }
    elseif($_SESSION['usertype']=='admin')
    {
        header("location:../login.php");
    }

include('header2.php');
include ('connection.php');

$name=$_SESSION['name'];
$sql="SELECT * FROM student WHERE stu_name='$name' ";
$result=mysqli_query($conn,$sql);
if($result->num_rows == 1){
$info=mysqli_fetch_assoc($result);
$stuId= $info["stu_id"];
$stuName=$info["stu_name"];
$stuImg= $info["image"];

}
//Update Student Code
if(isset($_POST['updateStuNameBtn']))
{
    if(($_REQUEST['stuName'] == "")){
        echo "Fill All Fields ";
    }
    else{
    $stuName=$_POST['stuNname'];
    $stuEmail=$_POST['stuEmail'];
    $stu_image=$_FILES['stuImg']['name'];
    $stu_image_temp=$_FILES['stuImg']['tmp_name'];
    $img_folder='../image/stu/'.$stu_image;
    move_uploaded_file($stu_image_temp, $img_folder);
    



    $query="UPDATE student SET stu_name='$name',stu_email='$email',image='$img_folder'   WHERE stu_name='$name'  ";
    
    $result2=mysqli_query($conn,$query);

    if($result2)
    {
       
       $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2"
       role="alert"> Update Sucessfully</div> ';
      
    }
    else{
        $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2"
        role="alert"> Unable to Update</div> ';
    }
}
}


?>
<h1>Welcome <?php echo "{$info['stu_name']}" ?> !</h1>

<div class="col-sm-6 mt-5">
    <form action="#" class="mx-5" method="POST" enctype="multipart/form-data">
        <div class="form-group">
        <label for="stuId">Student ID</label>
        <input type="text" class="form-control" id="stuId" name="stuId" value="<?php echo "{$info['stu_id']}" ?>" readonly>
        </div>
        <div class="form-group">
        <label for="stuEmail">Name</label>
        <input type="email" class="form-control" id="stuEmail" name="stuName" value="<?php echo "{$info['stu_name']}" ?>" readonly>
        </div>
        <div class="form-group">
        <label for="stuName">Email</label>
        <input type="text" class="form-control" id="stuEmail" name="stuEmail" value="<?php echo "{$info['stu_email']}" ?>" >
        </div>
        
        <div class="form-group">
        <label for="stuImg">Upload Image</label>
        <input type="file" class="form-control-file" id="stuImg" name="stuImg"  >
        </div>
        <button type="submit" class="btn btn-primary" name="updateStuNameBtn">Update</button>
        <?php if(isset($passmsg)) {echo $passmsg;} ?>
    </form>
</div>