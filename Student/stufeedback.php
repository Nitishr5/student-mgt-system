<?php
 session_start();
 include('header2.php');
 include 'connection.php';
 if(!isset($_SESSION['name']))
 {
     header("location:../login.php");
 }
 elseif($_SESSION['usertype']=='admin')
 {
     header("location:../login.php");
 }

 $name=$_SESSION['name'];
$sql= "SELECT * FROM student WHERE stu_name='$name'";

$result = $conn->query($sql);

if($result->num_rows == 1){
    $row=$result->fetch_assoc();
    $stuId = $row["stu_id"];
}

if(isset($_REQUEST['submitFeedbackBtn'])){
    if(($_REQUEST['f_content'] == "")){
        //msg display if required field 
        $passmsg='<div class="alert alert-sucess col-sm-6 ml-5 mt-2" role="alert">Fill All Field </div> ';
    }
    else{
        $fcontent = $_REQUEST["f_content"];
        $sql="INSERT INTO feedback (f_content, stu_id) VALUES ('$fcontent', '$stuId')";
        if($conn->query($sql)== TRUE){
            $passmsg='<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Submit Successfully</div>            ';
        }else{
            $passmsg='<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Failed to submit</div>            ';
        }
    }
}

?>

<div class="col-sm-6 mt-5">
<form action="" class="mx-5" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="stuId">Student ID</label>
        <input type="text" class="form-control" id="stuId" 
        name="stuId" value="<?php if(isset($stuId)) {echo $stuId; } ?>" readonly >
    </div>
    <div class="form-group">
        <label for="stuId">Write FeedBack: </label>
        <textarea name="f_content" id="f_content" row=2></textarea>
    </div>
    <button type="submit" class="btn btn-primary" name="submitFeedbackBtn">Submit </button>
    <?php if(isset($passmsg)) {echo $passmsg; }?>
</form>
</div>