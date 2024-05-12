    <?php
include 'connection.php';
include 'sidebar.php';

if(isset($_POST['add-student'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $usertype = "student";
   

   

    
    $sql = "INSERT INTO student (stu_name, stu_email, stu_pass, usertype) VALUES ('$name', '$email','$password', '$usertype')";

    $result = mysqli_query($conn, $sql);

    if($result){
        echo "<div class='alert alert-success'>Course Added Sucessfully.</div>";
    }
}
?>

<div class="content">
    <center>
        <h1>Add Student</h1>
        <div class="div_deg">
            <form action="#" method="POST" enctype="multipart/form-data">
                <div>
                    <label>Name :</label>
                    <input type="text" name="name">
                </div><br>
                <div>
                    <label>Email :</label>
                    <input type="email" name="email">
                </div><br>
                <div>
                    <label>Password :</label>
                    <input type="text" name="password">
                </div><br>
               
                <div>
                    <input type="submit" class="btn btn-primary" name="add-student" value="Add Student">
                    <?php if(isset($msg)) {echo $msg;} ?>
                </div><br>
            </form>
        </div>
    </center>
</div>
