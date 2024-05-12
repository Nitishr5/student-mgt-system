<?php
// include 'sidebar.php';
include 'connection.php';
session_start();

if(isset($_REQUEST['view'])){
    //  $stu_id = $_REQUEST['stu_id'];
    $sql = "SELECT * FROM student WHERE stu_id = {$_REQUEST['id']}";
    $result = $conn->query($sql);
    $info = $result->fetch_assoc();
}




if(isset($_REQUEST['update'])){
    if(($_REQUEST['stu_id'] == "") || ($_REQUEST['stu_name'] == "") || ($_REQUEST['stu_email'] == "") || ($_REQUEST['stu_pass'] == "") ){
        $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Field</div>';
    }else{
        $sid= $_REQUEST['stu_id'];
        $sname= $_REQUEST['stu_name'];
        $semail= $_REQUEST['stu_email'];
        $spass= $_REQUEST['stu_pass'];
        $file=$_FILES['image']['name'];

        $dst="./image/".$file;

        $dst_db="image/".$file;
         move_uploaded_file($_FILES['image']['name'],$dst);

        $sql="UPDATE student SET stu_id= '$sid',stu_name= '$sname',stu_email= '$semail',stu_pass= '$spass',image='$dst_db' WHERE stu_id='$sid' ";
        if($conn->query($sql)==TRUE){
             $msg = '<div class="alert alert-sucess col-sm-6 ml-5 mt-2" role="alert"> Update Sucessfully !</div>';
            // echo "Update sucessfully";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update student Data</title>
</head>
<style>
label {
    display: inline-block;
    text-align: right;
    width: 100px;
    padding-top: 10px;
    padding-bottom: 10px;
}

.div_deg {
    background-color: skyblue;
    width: 500px;
    padding-top: 70px;
    padding-bottom: 70px;
}
</style>
<body>
    <div class="content">
        <center>
            <h1>Update Course Data</h1>
            <div class="div_deg">
                <form action="" method="POST" enctype="multipart/form-data">
                    <input type="text" name="stu_id" value="<?php {echo $info['stu_id'];} ?>" hidden>
                    <div>
                        <label>Student Name :</label>
                        <input type="text" name="stu_name" value="<?php if(isset($info['stu_name'])) {echo $info['stu_name']; } ?>">
                    </div><br>
                    <div>
                        <label>Email :</label>
                        <input type="email" name="stu_email" value="<?php if(isset($info['stu_email'])) {echo $info['stu_email'];} ?>">
                    </div><br>
                    <div>
                        <label>Password :</label>
                        <input type="text" name="stu_pass" value="<?php if(isset($info['stu_pass'])) {echo $info['stu_pass'];} ?>">
                    </div><br>
                    <div>
                        <label for="">Student old Image:</label>
                        <img width="100px" height="100px" src="<?php echo "{$info['image']}" ?>">
                    </div>
                    <div>
                <label for="">New Image :</label>
                <input type="file" name="image">
            </div><br>
                    <div>
                        <button type="submit" class="btn btn-danger" id="update" name="update">Update</button>
                    </div><br>
                </form>
            </div>
        </center>
    </div>
</body>
</html>
