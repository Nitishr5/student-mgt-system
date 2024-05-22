<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="Navbar.php">
</head>
<style>
      .navbar{
         position:sticky;
         top: 0;
        }
    .head img {
      margin-left: 45%;
    }

    .head h2 {
      text-align: center;
      color: orange;
    }

    .head h5 {
      text-align: center;
    }

    .box {
      border: 2px solid black;
      height: 40px;
      width: 560px;
      margin-left: 35%;
      background-color: rgb(9, 255, 0);
      color: blue;
      border: none;
      border-radius: 5px;
    }

    .container-fluid {
      gap: 30px;

    }


    .content {
      border: 2px solid #fff;
      height: 200px;
      width: 800px;
      margin-left: 70px;

    }

    .content p {
      text-align: justify;
    }

    .content h2 {
      color: salmon;
      border-bottom: 2px solid tomato;
    }

    .notic {
      border: 2px solid black;
      height: 560px;
      width: 670px;
      position: relative;
      left: 58%;
      bottom: 130px;
      background-color: bisque;
      border: none;
      list-style-type: none;

    }

    .notic a {
      color: darkgreen;
      font-size: 15px;
      line-height: 10px;
    }

    .notic h4 {
      text-align: center;
      border-bottom: 2px solid black;
      font-family: sans-serif;
      color: coral;
    }

    .carousel-item {
      height: 600px;
      width: 100px;
    }

    header {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      background: #ffffff;
      box-shadow: 0 5px 10px rgba(0, 0, 0, 1);
      padding: 20px 7%;
      display: flex;
      align-items: center;
      justify-content: space-between;
      z-index: 1000;
    }

    header .logo {
      font-weight: bolder;
      font-size: 25px;
      color: #333;
    }

    header .navbar ul {
      list-style: none;
    }

    header .navbar ul li {
      position: relative;
      float: left;

    }

    header .navbar ul li a {
      font-size: 20px;
      padding: 20px;
      color: #333;
      display: block;
    }

    header .navbar ul li a:hover {
      background-color: rgb(54, 50, 50);
      color: #fff;
    }

    header .navbar ul li ul {
      position: absolute;
      left: 0;
      width: 200px;
      background: #fff;
      display: none;
    }
    .navbar-brand img {
            height: 60px;
            width: 200px;
            background-color: wheat;
            border-radius: 20px;
        }

        nav {
            position: sticky;
        }
        .navbar{
         position:sticky;
         top: 0;
         z-index: 50;
        }
        .d-flex {
            margin-left: 400px;
        }

    .use a{
      display:block;
      text-decoration: none;
      font-size: 20px;
      color: white;  
      font-weight: 500; 
    }
   
    .foot-container{
      display: flex;
      text-align: center;
      margin-left: 20px;
      padding-bottom: 90px;
    }
    .use{
     
      width: 500px;
      height: 200px;
      margin-left: 40px;
    }
    .use h4{
      color: green; 
      font-weight: 900;
      
    }
    .use a{
      color: gray;
    }
    footer{
      background-color: wheat;
    }
   .use .fa{
      color: #fff;
      font-size: 40px;
      margin-left: 15px;
      margin-top: 70px;
    }
   .use .fa-twitter{
      color:rgb(0, 187, 255);
    }
    .use .fa-youtube{
      color: red;
    }
    .use .fa-instagram{
      color: rgb(221, 101, 121);
    }
    .use .fa-whatsapp{
      color: green;
    }
    .use .fa-pinterest{
      color:rgb(255, 0, 123);
    }
    .use .fa-facebook{
      color: blue;
    }
    .web{
      display: flex;
    }
    footer .copy{
      display: flex;
      height: 89px;
      background-color: rgb(23, 35, 46);
      padding-top: 50px;

    }
    footer .copy p{
      color: rgb(212, 212, 212);
    }
    footer .copy .p1{
          margin-left: 40%;
    }
    footer .copy .p1 a{
      text-decoration: none;
      color:gray;
    }
    footer .copy a{
      text-decoration: none;
      color: green;
    }


  
    .QWE button{
            background-color: green;
            border: none;
            font-size: larger;
            color: aliceblue;
            padding: 10px;
           transform: rotate(-90deg);
            position: relative;
            bottom: 150px;
            right: 92%;
            width: 200px;
            position: fixed;
        }
       

        .QWE1 button{
            background-color: rgb(5, 0, 108);
            border: none;
            font-size: larger;
            color: aliceblue;
            padding: 10px;
           transform: rotate(-90deg);
            position: relative;
            bottom: 480px;
            right: 92%;
            width: 200px;
            position: fixed;
        }

    
  </style>
<body>
<?php

include 'Navbar.php'
?>


<div class="content">
    <h2>Schoolary About Us </h2>
    <p>
      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure, ex! Esse deleniti aperiam amet facere impedit tempore beatae, quos architecto illo eligendi nesciunt itaque, libero quae, numquam quas magnam excepturi?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum corrupti ab iste vel qui quisquam, quod magni quidem deleniti porro praesentium quam cumque aperiam ipsa nobis, adipisci molestias ducimus earum.lorme Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste, molestias quibusdam ipsum iusto dolor voluptas quae cumque asperiores officiis similique commodi. Voluptatibus ipsum velit possimus consequatur, doloribus ducimus dolor nihil rerum placeat provident voluptas perspiciatis repellendus omnis sunt aspernatur ab ut cupiditate dolore vel. Quam provident fuga, nam nihil exercitationem beatae alias iusto blanditiis quasi dolore nostrum doloribus quaerat corrupti velit nesciunt tempora facilis quisquam aut earum repellat repudiandae eum magni. Iste molestias sed in minima officia sit possimus eum, quos inventore qui nisi. Inventore earum labore consectetur modi eveniet odio cupiditate suscipit, tenetur aliquam omnis quaerat, blanditiis quas doloribus ducimus vitae dolore aliquid. Hic harum recusandae cupiditate porro sint, repudiandae quos aliquam! Tempora itaque impedit nam, architecto est autem animi vitae hic aliquam, vel minus quidem nihil dolore accusamus nemo perferendis consequatur labore excepturi expedita saepe doloremque. Modi consequuntur omnis, iusto earum accusamus saepe facere enim quia officia dicta deserunt impedit non voluptatum quis quasi quas vel, magnam nulla ducimus suscipit aliquam officiis dolorem ipsa. Deserunt quidem ratione libero nostrum nam saepe, sed recusandae distinctio, eligendi atque nemo molestiae modi dolor nihil cum! Assumenda, maxime suscipit perferendis minima aut velit. Iste expedita sit, voluptatem enim fugit nesciunt accusamus quidem.
    </p><br>
    <h5>Affiliated Institu</h5>
    <p><b>Schollary </b>, varanasi is an affiliated college, which means it is affiliated with a larger
      university. The college provides the programme and the university awards the degree. The affiliated college is
      established or maintained by the university. <a href="#">Read more....</a></p>

  </div>

  <img class="notic" src="https://lds-business-college.brightspotcdn.com/dims4/default/add3b8a/2147483647/strip/true/crop/3101x4160+1569+0/resize/410x550!/format/webp/quality/90/?url=http%3A%2F%2Fensign-brightspot.s3.us-east-2.amazonaws.com%2F4b%2Ff1%2F0ca0e04d47f89f65731cffbf45d3%2Fensign-college-hr-186.jpg" alt="">

<?php
include 'footer.php';
?>

</body>
</html>