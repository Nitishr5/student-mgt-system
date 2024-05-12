<?php
include 'connection.php';
include ('header.php');


$sql= "SELECT * FROM contact";
$result=mysqli_query($conn,$sql);
?>

<div class="col-sm-9 mt-5">
<p class="bg-dark text-white p-2">List of Contact Form</p>



<table class="table">
    <thead>
        <tr>
            <th scope="col"> ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
            <th scope="col">Message</th>
        </tr>
    </thead>

    <tbody>
        <?php
        while($info=$result->fetch_assoc()){
            ?>


            <tr>
                <th>
                    <?php echo "{$info['id']}";?>
                </th>
                <td>
                    <?php echo "{$info['name']}";?>
                </td>
                <td>
                    <?php echo "{$info['email']}";?>
                </td>
                <td>
                    <?php echo "{$info['mobile']}";?>
                </td>
                
                <td>
                    <?php echo "{$info['message']}";?>
                </td>
            </tr>









<?php
        }

        ?>