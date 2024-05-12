<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Navbar.php">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <style>
           .mx-3{
        height:50px;
        
    }
    .my-4{
        color:red;
        text-decoration:underline;
    }
    .stripe{
    background-image: linear-gradient(240deg, #db3246, #93291e);
    padding: 3rem;
    height: 13rem;margin-top: 4rem;
    transform: rotate(10deg);
    z-index:-5;
}



    </style>
</head>
<body>
    <?php
        include 'Navbar.php'
    ?>
   
   <center>


<h1 style="padding-top:30px;margin-top:90px; color:green; font-weight:800; font-size:45px;">All Course</h1>


<!-- start main content -->
<div class="container">
    <h2 class="text_center my-4">Payment Status</h2>
    <form action="" method="post">
        <div class="form-group row">
            <label class="offset-sm-3 col-form-label"></label>
            
               order Id:<input type="text" name="" class="form-control mx-3">
            </div>
            <div>
                <input type="submit" class="btn btn-primary mx-4" value="view">
            </div>
        </div>
    </form>
</div>


<div class="container mt-4" id="contact">
  <h2 class="text-center mb-4">Contact Us</h2>
  
  <div class="row ">
    <div class="col-md-8">
      <form action="" method="post">
        <input type="text" class="form-control" name="name" placeholder="Name"><br>
        <input type="text" class="form-control" name="subject" placeholder="subject"><br>
        <input type="email" class="form-control" name="email" placeholder="email"><br>
        <textarea class="form-control" name="message" placeholder="How can we help you?" cols="30" rows="10" style="height:150px;"></textarea><br>
        <input class="btn btn-primary" type="submit" value="send" name="submit"><br><br>

      </form>
    </div>

    <div class="col-md-4 stripe text-white text-center">
      <h4>ischool</h4>
      <p>ischool,
        Near Lanka , Varansi,
        uttar-pradesh -834005<br />
        Phone: +000000000 <br />
        www.ischool.com <br/>
      </p>
    </div>
  </div>
</div>



</center>

    <?php
        include 'footer.php'
    ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>