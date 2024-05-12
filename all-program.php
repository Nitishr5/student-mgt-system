<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="footer.php">
    <style>
      *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    width:fit-content%;
    
  }


  .upper {

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





.card-body{
  background:rgb(201, 201, 201);;
}
.card-title{
  color:#006248;
  text-decoration:underline;
  font-size:35px;
  
}
.card-text {
        font-size: 16px;
        color: #555;
    }

    .card-text del {
        color: #999; /* Color for the original price */
    }

    .card-text .font-weight-bolder {
        color: #f00; /* Color for the discounted price */
        font-weight: bold;
        margin-left: 10px; /* Adjust as needed */
    }
   .d-inline {
    font-size:25px;
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

  <div class="course-heading">
  <h1>Our Course</h1>
  </div>


  <div class="row row-cols-1 row-cols-md-3 g-4">
<?php
include 'connection.php';
$sql ="SELECT * FROM course";
$result=mysqli_query($conn,$sql);

while($info=$result->fetch_assoc())
{
  $course_id=$info['id'];
?>


  <div class="col">

    <div class="card">
      <img src="<?php echo "{$info['image']}"?>" alt="image">
      <div class="card-body">
        <h5 class="card-title"><?php echo "{$info['name']}" ?></h5>
        <p class="card-text"><?php echo "{$info['description']}" ?></p>
        
        <p class="card-text d-inline">
    Price: 
    <small>
        <del><?php echo "&#8377 {$info['price']}" ?></del>
    </small>
    <span class="font-weight-bolder"><?php echo "&#8377 {$info['org-price']}" ?></span>
</p>
    
    


<?php 
echo "<a href='course-detail.php?course_id={$info['id']}' style='
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    border: none;
    cursor: pointer;
'>Enroll</a>";
?>


      

      </div>
    </div>
  </div>
<?php
}

?>


  <!-- <div class="col">
    <div class="card">
      <img src="image/php-img.jpg" class="card-img-top" alt="php">
      <div class="card-body">
        <h5 class="card-title">PHP Devlopment</h5>
        <p class="card-text"> PHP is the world’s most popular server-side programming language for building web applications. Over the years, it has gone through successive revisions and versions..</p>
        <p class="card-text d-inline">Price: <small><del>5000</del></small> <span
    class="font-weight-bolder">&#8377 3000<span></p>
        <a href="#" class="btn btn-primary">Enroll</a>
      </div>
    </div>
  </div> -->


</div>

<?php
include 'footer.php'
?>

<script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</script>
</body>
</html>