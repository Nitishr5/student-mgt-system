
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      .container{
        
      }
      h1{
        text-align:center;
        text-decoration:underline;
        color:red;
      }

      .upper {
margin-top:75px;
height: 300px;
width: 100%;
background: url("image/background.png");
color: rgb(25, 85, 138);

}

.upper p {
font-size: 40px;
text-align: center;
margin-bottom:50px;

}

.down {
display: flex;
margin-left:40%;


}

.down a {
text-decoration: none;
color: red;
font-size: 25px;
margin-right:18px
}

.down a:hover {
color: green;
font-size: 27px;
font-weight: 500;
}

.down ul li {
list-style: circle;
color: yellow;
font-size: 25px;
margin-left:60px

}

.bi-arrow-right{
  color:white;
}


.course-heading{
  text-align:center;
  color:#006248;
  text-decoration:underline;
  padding:30px;
}
.course-heading:hover{
  color:green;
  cursor: pointer;
  transition:1
}
.enrl-btn{
  text-decoration:none;
  color:white;
}
iframe{
  padding-top:10%;
}

    </style>
</head>
<body>
<div class="upper">
    <p>SWAMI SHIWANAND JEE TIRTH COLLEGE 2022-2023</p>
    <div class="down">
      <a href="index.php">Home</a>
      <span><svg xmlns="http://www.w3.org/2000/svg" width="40" height="30" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
</svg></span>
      <ul>
        <li>Program</li>
      </ul>
    </div>
  </div>

 

<div class="col-sm-9 mt-5 container">
    <h1>Contact Us</h1>
<form method="POST">
<div class="mb-3">
    <label for="exampleInputname" class="form-label">Full Name</label>
    <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Mobile no.</label>
    <input name="mobile" type="number" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Enter your message </label>
  <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
  <button name="submit" type="submit" class="btn btn-success">Submit</button>




  <?php
include 'Navbar.php';

      include 'connection.php';

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $message=$_POST['message'];

  $sql= "INSERT INTO contact (name,email,mobile,message) VALUE ('$name','$email','$mobile','$message')";

  $result=mysqli_query($conn,$sql);

  if($result){
    echo "<div class='alert alert-success'>You are registerd Sucessfully.</div>";
  }

}

?>




</form>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115408.24588681401!2d82.90870727116949!3d25.320739742503008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398e2db76febcf4d%3A0x68131710853ff0b5!2sVaranasi%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1715256074422!5m2!1sen!2sin" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<?php
  include ('footer.php');
?>
<script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0-beta3/js/bootstrap.bundle.min.js"></script>
</script>
</body>
</html>