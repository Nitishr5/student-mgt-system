<style>
    .fa-trash-alt{
        font-size:20px;
        
    }
    .fa-trash-alt a{
        text-decoration: none;
        color:red;
    }
</style>

<?php
include('header.php');

include 'connection.php';
error_reporting(0);
 session_start();
        // if(!isset($_SESSION['username']))
        // {
        //     header("location:login.php");
        // }
        // elseif($_SESSION['usertype']=='student')
        // {
        //     header("location:login.php");
        // }


         //code for Show Student Data-------------------->

         $sql="SELECT * FROM student WHERE usertype='student' ";
         $result=mysqli_query($conn,$sql);
?>

<div class="col-sm-9 mt-5">
<p class="bg-dark text-white p-2">List of Student</p>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Student ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
            
        </tr>
        </thead>
    <tbody>
        <?php
            while($info=$result->fetch_assoc())
                {

             
?>
        

      <tr>
            <th scope="row">
                <?php echo "{$info['stu_id']}";?>
            </th>
            <td>
                <?php echo "{$info['stu_name']}";?>
            </td>
            <td>
            <?php echo "{$info['stu_email']}";?>
            </td>
           <td>
           
           <form action="editstudent.php" method="POST" class="d-inline">
            <input type="hidden" name="id" value="<?php echo $info['stu_id']; ?>">
           <button
            type="submit"
            class="btn btn-info mr-3"
            name="view"
            value="View">
        <i class="fas fa-pen"></i>
    </button>
    </form> 
            
        
        
    <form action="" method="POST" class="d-inline">
            <input type="hidden" name="id" value="<?php echo $info['stu_id']; ?>">
        <button
            type="submit"
            class="btn btn-secondary"
            name="delete"
            value="Delete">
        <i class="far fa-trash-alt "></i>                    
        </button>
        </form>


        </tr>
       <?php
                }
        ?>
    </tbody>
</table>

</div>

<!-- Delete Code -->
<?php
    if(isset($_REQUEST['delete'])){
        $sql= "DELETE FROM student WHERE stu_id={$_REQUEST['id']}";
        if($conn->query($sql) == TRUE){
            echo '<meta http-equiv="refresh" content="0;URL=?deleted"/>';
        }
        else{
            echo "Unable to delete data";
        }
    }
?>

<div>
    <a class="btn btn-danger box" href="add-student.php"><i class="fas fa-plus fa-2x"></i></a>
</div>


