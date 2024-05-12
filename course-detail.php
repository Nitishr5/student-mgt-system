<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

    <style>
         .mx-3{
        height:50px;
         }
         .btn:hover{
            color:red;
         }


        /* Author About */

        .author-card {
    display: flex;
    align-items: center;
    padding: 16px;
    
    border-radius: 8px;
    margin-left:18%;
    margin-top:10%
   
}

.author-card:hover {

}

.author-image {
    width: 48px;
    height: 48px;
    border-radius: 50%;
    overflow: hidden;
    margin-right: 16px;
}

.author-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.author-details {
    flex-grow: 1;
}

.author-details h3 {
    margin: 0 0 8px 0;
    font-size: 1.5rem;
    color: #333;
}

.author-details h6 {
    margin: 0 0 4px 0;
    font-size: 1.8rem;
    color: #666;
}

.author-details p {
    margin: 0;
    font-size: 1rem;
    color: black;
}
.fa-brands{
    color: #1DA1F2;
    
}







.review-card {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 16px;
            margin-bottom: 16px;
            margin-top:40px;
            display: flex;
            align-items: center;
            width: 20%;
            margin-left:20%;
        }
       

        .reviewer-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #ccc;
            margin-right: 16px;
        }

        .review-details {
            flex: 1;
        }

        .reviewer-name {
            font-weight: bold;
            margin-bottom: 8px;
        }

        .review-date {
            color: #666;
            margin-bottom: 8px;
        }

        .review-comment {
            color: #333;
            margin-bottom: 8px;
        }

        .rating {
            display: flex;
            align-items: center;
        }

        .star {
            color: #ffc107;
            margin-right: 4px;
        }
        .review-card-container{
            display:flex;
            
        }
        
        .imag{
            border-radius:50% ;
            height:50px;
            width:50px;
        }
    
    </style>
</head>
<body>
    <?php
        include 'Navbar.php';
        include 'connection.php';
    ?>

<center>


<h1 style="padding-top:90px; color:red; font-weight:800; font-size:45px;">All Course</h1>
</center>

<div class="container mt-5">
    <?php

    if(isset($_GET['course_id'])){

        $course_id= $_GET['course_id'];
        $sql= "SELECT * FROM course WHERE id= '$course_id' ";
        $result= $conn->query($sql);
        $info=$result->fetch_assoc();

    }
       
     
    

?>
    <div class="row">
        <div class="col-md-4">
            <img src="<?php echo $info['image'] ?>" class="card-img-top" alt="">
        </div>
        <div class="col-md-8">
            <div class="card-body">
            <h3 class="card-title">Course Name: <?php echo $info['name']   ?></h3>
            <p class="card-text" style="padding-top:20px; color:black; font-size:15px;"><?php echo $info['description'] ?></p>
            <form action="" method="POST">
                <p class="card-text d-inline">Price: <small><del>&#8377 <?php echo $info['price'] ?> </del></small><span class="font-weight-bolder" style="font-weight:700; color:black;">  &#8377
<?php echo $info['org-price'] ?> </spn></p>
                    <button type="submit" class="btn btn-primary text-red font-weight-bolder float-right" name="buy" style="margin-left:180px;">Buy Now</button>
            </form>
            </div>
        </div>
    </div>
  


    <div class="container">
        <div class="row">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">Lesson No.</th>
                        <th scope="col">Lesson Name</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Introduction</td></tr>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>History and feture of Java</td></tr>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Setup Enivormrnt, JDK,JRE,JVM</td></tr>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Exploring First Java Program</td></tr>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Constant,Variable,Keyword</td></tr>
                    </tr>
                    <tr>
                        <th scope="row">pdf</th>
                        <td>Assigment-1</td></tr>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>Data Types, Type Conversion</td></tr>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td>Operator in Java, Assigment-1 Solution </td></tr>
                    </tr>
                    <tr>
                        <th scope="row">pdf</th>
                        <td>Assigment-2 operator</td></tr>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <td>Decision Control in Java</td></tr>
                    </tr>
                    <tr>
                        <th scope="row">9</th>
                        <td>Star pattern</td></tr>
                    </tr>
                    <tr>
                        <th scope="row">10</th>
                        <td>Class and Object</td></tr>
                    </tr>
                    <tr>
                        <th scope="row">11</th>
                        <td>Memory Management</td></tr>
                    </tr>
                    <tr>
                        <th scope="row">12</th>
                        <td>Command Line Argument</td></tr>
                    </tr>
                    <tr>
                        <th scope="row">13</th>
                        <td>Array in java</td></tr>
                    </tr>
                    <tr>
                        <th scope="row">14</th>
                        <td>String in Java</td></tr>
                    </tr>
                    <tr>
                        <th scope="row">15</th>
                        <td>Therading</td></tr>
                    </tr>
                    <tr>
                        <th scope="row">pdf</th>
                        <td>Assigement more Array</td></tr>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>



</div>

<div class="author-card">
    <div class="author-image">
        <img src="https://imgproxy.learnyst.com/https://asset-cdn.learnyst.com/assets/schools/3258/teacher/ultimate_tips_for_NIMCET_2018_gq86vzj.png?w=48&amp;h=48&amp;resizetype=fit" alt="Saurabh Shukla">
    </div>
    <div class="author-details">
        <h2>Author</h2>
        <br><br>
        <h6>Saurabh Shukla</h6>
        <i class="fa-brands fa-twitter"></i>
        <p>
            He is a teacher, computer programmer, YouTuber, and Motivator. He has done MCA from NIT Bhopal.<br/> He was placed in Accenture but did not join as he discovered his first love for teaching.
        </p>
    </div>
</div>





<div class="review-card-container">

<div class="review-card">
    <div class="reviewer-avatar">
        <img src="https://www.codehelp.in/_next/image?url=https%3A%2F%2Fcdn.thecodehelp.in%2F20220907_122714_e19e9a8b7a.png&w=128&q=75" alt="" class="imag">
    </div>
    <div class="review-details">
        <div class="reviewer-name">Raj Rajendra Singh</div>
        <div class="rating">
            <span class="star">⭐</span>
            <span class="star">⭐</span>
            <span class="star">⭐</span>
            <span class="star">⭐</span>
            <span class="star">⭐</span>
        </div>
        <div class="review-date">13 Dec, 23</div>
        <div class="review-comment">Best course but advanced java concepts are not discussed.</div>
    </div>
</div>

<div class="review-card card2">
    <div class="reviewer-avatar">
        <img src="https://www.codehelp.in/_next/image?url=https%3A%2F%2Fcdn.thecodehelp.in%2FIMG_9037_086d5a6a8b.jpg&w=128&q=75" alt="" class="imag">
    </div>
    <div class="review-details">
        <div class="reviewer-name">Anubhav Negi</div>
        <div class="rating">
            <span class="star">⭐</span>
            <span class="star">⭐</span>
            <span class="star">⭐</span>
            <span class="star">⭐</span>
            <span class="star">⭐</span>
        </div>
        <div class="review-date">11 Nov, 23</div>
        <div class="review-comment">The course by Saurabh Sir is very good. He has taught Java In-Depth and has explained topics thoroughly. Thank you, sir!</div>
    </div>
</div>
</div>


<?php
include 'footer.php'
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>