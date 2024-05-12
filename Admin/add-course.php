<?php
include 'connection.php';
include 'sidebar.php';



// session_start();
//         if(!isset($_SESSION['username']))
//         {
//             header("location:login.php");
//         }
//         elseif($_SESSION['usertype']=='student')
//         {
//             header("location:login.php");
//         }




if(isset($_POST['add_course'])){
    if(($_POST['name']=="") || ($_POST['description']=="")||($_POST['price']=="")||($_POST['org-price']=="")){
        $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';
    }else if(isset($_POST['add_course'])){
        $name=$_POST['name'];
        $desc=$_POST['description'];
       $price=$_POST['price'];
       $org_price=$_POST['org-price'];
       $file=$_FILES['image']['name'];

       $dst="../Admin./image/".$file;

       $dst_db="image/".$file;


       move_uploaded_file($_FILES['image']['name'],$dst);
       $sql = "INSERT INTO course (name, description, image, price, `org-price`) 
       VALUES ('$name', '$desc', '$dst_db', '$price', '$org_price')";

$result = mysqli_query($conn, $sql);


       if($result){
       

    echo "<div class='alert alert-success'>Course Added Sucessfully.</div>";
    
       }
       else{
        echo "Faild to add course";
       }

    }
}

      
        
?>






    <div class="content">
       <center>
       <h1>Add course</h1>

<div class="div_deg">

  <form action="#" method="POST" enctype="multipart/form-data">
      <div>
          <label>Name :</label>
          <input type="text" name="name">
      </div><br>
      <div>
          <label for="">Description:</label>
          <textarea name="description" ></textarea>
      </div>
      <br>
      <div>
          <label for="">price :</label>
          <input type="number" name="price">
      </div><br>

      <div>
          <label>org-Price :</label>
          <input type="text" name="org-price">
      </div><br>

      <div>
          <label for="">Image :</label>
          <input type="file" name="image">
      </div><br>
      
      
      <div>

     
          
          <input type="submit" class="btn btn-primary" name="add_course" value="Add Course">
          <?php if(isset($msg)) {echo $msg;} ?>
      </div><br>
      
  </form>

    </center>
        

    </div>


















