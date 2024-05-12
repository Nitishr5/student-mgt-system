<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    *{
    margin: 0;
    padding: 0;
}
.header{
    background-color: skyblue;
    line-height: 70px;
    padding-left: 30px;
    position: sticky;
  top: 0;
    


}

.logout
{
    float: right;
    padding-right: 30px;
}
#btn1{
    text-decoration: none;
    font-size: 20px;
}
#btn1:hover{
    color:aliceblue;
}
ul{
    background-color: #424a5b;
    width: 16%;
    height: 100%;
    position: fixed;
    padding-top: 5%;
    text-align: center;
}

ul li{
    list-style: none;
    padding-bottom: 30px;
    font-size: 15px;
    
}
ul li a{
    color: aliceblue;
    font-weight:bold;
    text-decoration: none;
    font-size: 16px;
    
}
ul li a:hover{
    color: aqua;
}
.content{
    margin-left: 20%;
    margin-top: 5%;
}
</style>
<body>
<header class="header">
        <a href="admin-Home.php" id="btn1">Admin Dashboard</a>
        <div class="logout">
            <a href="../logout.php"   class="btn btn-primary">Logout</a>
        </div>
    </header>
    <aside>
        <ul>
        <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                <a href="admission.php">Admission</a>
            </li>
            <li>
                <a href="add-student.php">Add Student</a>
            </li>
            <li>
                <a href="view_student.php">View Student</a>
            </li>
            <li>
                <a href="admin_add_teacher.php">Add Teacher</a>
            </li>
            <li>
                <a href="admin_view_teacher.php">View Teacher</a>
            </li>
            <li>
                <a href="add-course.php">Add Course</a>
            </li>
            <li>
                <a href="view-course.php">View Course</a>
            </li>
        </ul>
    </aside>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0-beta3/js/bootstrap.bundle.min.js"></script>
</body>
</html>