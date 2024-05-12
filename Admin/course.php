<?php
include 'connection.php';
include('header.php');
session_start();

$sql="SELECT * FROM course ";
$result=mysqli_query($conn,$sql);
?>

<div class="col-sm-9 mt-5">
<p class="bg-dark text-white p-2">List of Courses</p>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Course ID</th>
            <th scope="col">Name</th>
            <th scope="col">org-Price</th>
            <th scope="col">Action</th>
            
        </tr>
    </thead>
    <tbody>
        <?php
    while($info=$result->fetch_assoc()){

   
?>
        <tr>
            <th scope="row">
                <?php echo "{$info['id']}";?>
            </th>
            <td>
                <?php echo "{$info['name']}";?>
            </td>
            <td>
                <?php echo "{$info['org-price']}";?>
            </td>
            <td>
            
            <form action="#" method="POST" class="d-inline">
            <input type="hidden" name="id" value="<?php echo $info['id']; ?>">
            <button
            type="submit"
            class="btn btn-info mr-3"
            name="view"
            value="View">
        <i class="fas fa-pen"></i></button>
    </form>
        
        <form action="" method="POST" class="d-inline">
            <input type="hidden" name="id" value="<?php echo $info['id']; ?>">
     
        <button
            type="submit"
            class="btn btn-secondary"
            name="delete"
            value="Delete"
        >
    <i class="far fa-trash-alt"></i>
</button>
</form>
</td>
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
        $sql= "DELETE FROM course WHERE  id={$_REQUEST['id']}";
        if($conn->query($sql) == TRUE){
            echo '<meta http-equiv="refresh" content="0;URL=?deleted"/>';
        }
        else{
            echo "Unable to delete data";
        }
    }
?>

<div>
    <a class="btn btn-danger box" href="add-course.php"><i class="fas fa-plus fa-2x"></i></a>
</div>