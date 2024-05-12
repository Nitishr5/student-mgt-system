<?php
include 'sidebar.php';

session_start();
    // if(!isset($_SESSION['username']))
    //     if(!isset($_SESSION['username']))
    //     {
    //         header("location:login.php");
    //     }
    //     elseif($_SESSION['usertype']=='student')
    //     {
    //         header("location:login.php");
    //     }
    
    include 'connection.php';
    $sql="SELECT * FROM course";
    $result=mysqli_query($conn,$sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin view-course</title>
    
    <style>
        table, th, td {
  border: 1px solid;
  
}
      .table_th{
                    padding:20px;
                    font-size:30px;
                }
               .table_td{
                padding:20px;
                background:skyblue;
                font-size:20px;
                
               } 
               .btn{
        background:#0D6EFD;
        padding:12px 24px;
        color:white;
        border-radius:5px;
        text-decoration:none;
    }
    .btn:hover{
        background:midnightblue;
    }
</style>
    
</head>
<body>
    
<div class="content">
<h1>View Course</h1>
<table>
    <tr>
        <th class="table_th">ID</th>
        <th class="table_th">Name</th>
        <th class="table_th">Description</th>
        <th class="table_th">Image</th>
        <th class="table_th">price</th>
        <th class="table_th">org-price</th>
        <th class="table_th">Update</th>
        <th class="table_th">Delete</th>
        
    </tr>
    <?php
    while($info=$result->fetch_assoc())
    {
        ?>
       <tr>
            <td class="table_td">
                <?php echo"{$info['id']}"; ?>
            </td>
            <td class="table_td">
                <?php echo "{$info['name']}";?>
            </td>
            <td class="table_td">
                <?php echo "{$info['description']}";?>
            </td>
            <td class="table_td">
                <img height="100px" width="100px" src="<?php echo "{$info['image']}";?>" >
                        
                    </td>
            <td class="table_td">
                <?php echo "{$info['price']}";?>
            </td>
            <td class="table_td">
                <?php echo "{$info['org-price']}";?>
            </td>

            <td  class="table_td">
                               <?php echo "<a  href='update_course.php?course_id={$info['id']}' class='btn btn-primary'>Update</a>";?>
                            </td>

                            <td  class="table_td">
                               <?php 
                               echo " 
                               <a href='delete_course.php?course_id={$info['id']}'>Delete</a>";
                               ?>
                            </td>
                            </tr>
                            <?php
        
    }
    ?>
    
</table>
</div>
</body>
</html>
