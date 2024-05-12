<?php
if(!isset($_SESSION)){
    session_start();
}

include 'connection.php';

include 'header.php';

        if(!isset($_SESSION['username']))
        {
            header("location:login.php");
        }
        elseif($_SESSION['usertype']=='student')
        {
            header("location:login.php");
        }

if(isset($_REQUEST['lessonSubmitBtn'])){
    if(($_REQUEST['lesson_name'] == "") || ($_REQUEST['lesson_desc']=="") || ($_REQUEST['id']=="") || ($_REQUEST['name']=="")){

        $msg= '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill All Fileds </div> ';
    } else{
        //Assingning User Values to Variable

        $lesson_name=$_REQUEST['lesson_name'];
        $lesson_desc=$_REQUEST['lesson_desc'];
        $course_id=$_REQUEST['course_id'];
        $course_name=$_REQUEST['course_name'];
        
        $sql="INSERT INTO lesson (lesson_name,lesson_desc,lesson_link,course_id,course_name) VALUES ('$lesson_name','$lesson_desc','$course_id','$course_name') " ;

        if($conn->query($sql)==TRUE){
            echo "Lesson Added Sucessfully";
        }

    }
}


// if(isset($_POST['add_course'])){
//     if(($_POST['name']=="") || ($_POST['description']=="")||($_POST['price']=="")||($_POST['lesson']=="")){
//         $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';
//     }else if(isset($_POST['add_course'])){
//         $name=$_POST['name'];
//         $desc=$_POST['description'];
//        $price=$_POST['price'];
//        $org_price=$_POST['org-price'];
//        $file=$_FILES['image']['name'];

//        $dst="./image/".$file;

//        $dst_db="image/".$file;


//        move_uploaded_file($_FILES['image']['name'],$dst);

//        $sql="INSERT INTO course (name,description,image,price,org-price) VALUES ('$name','$desc',' $dst_db','$price','$org_price')";

//        $result=mysqli_query($conn,$sql);

//        if($result){
       

//     echo "<div class='alert alert-success'>Course Added Sucessfully.</div>";
    
//        }
//        else{
//         echo "Faild to add course";
//        }

//     }
// }

      
        
?>






    <div class="content">
       <center>
       <h1>Add New Lesson</h1>

<div class="div_deg">

  <form action="#" method="POST" enctype="multipart/form-data">

  <div>
          <label>Course ID :</label>
          <input type="text" name="course_id" id="course_id" value="<?php if(isset($_SESSION['course_id'])){echo $_SESSION['course_id'];}?>" readonly>
      </div><br>

      <div>
          <label for="course_name">Course Name :</label>
          <input type="text" name="course_name" class="form-control" id="course_name" value="<?php if(isset($_SESSION['course_name'])){echo $_SESSION['course_name'];}?>" readonly > 
      </div><br>

      <div>
          <label for="course_name">Lesson Name :</label>
          <input type="text" name="lesson_name" class="form-control" id="lesson_name"  > 
      </div><br>

      <div>
          <label for="">Lesson Description:</label>
          <textarea name="lesson_desc" class="form-control" id="lesson_desc" row=2></textarea>
      </div>
      <br>

      <div>
          <label for="">Lesson Video Link:</label>
          <input type="file" name="lesson_link" class="form-control-file" id="lesson_link"  > 
      </div>
      <br>

      <div>
        <button type="submit" class="btn btn-danger" id="lessonSubmitBtn" name="lessonSubmitBtn">Submit</button>
        <a href="lesson.php" class="btn btn-secondary">Close</a>
      </div>

      <?php if(isset($msg)) {echo $msg;} ?>
      
  </form>

    </center>
        

    </div>

