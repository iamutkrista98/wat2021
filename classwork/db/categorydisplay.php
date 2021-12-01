<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Category Table</title>
</head>
<body>
    
    <?php 
    if(isset($_GET['msg'])){
        echo "<h2>".$_GET['msg']."</h2>";
    }
    //sql query
    $sql = "SELECT * FROM category ORDER BY id ASC"; 
    //connection to database 
    include('connection.php');
    //
    $query=mysqli_query($conn,$sql) or die(mysqli_error($conn));
    $count = mysqli_num_rows($query);
    if($count>=1)
    {
        echo "<h1>There are $count Records.</h1>";



    
    
    
    ?>
    <h2><a href="categoryregister.php">Add New Record</a></h2><br>
    <table border="1">
        <thead>
            <tr>
                <th>Category ID</th>
                <th>Category Name</th>
                <th>Category Description</th>
                <th>Category Status</th>
                <th>Actions</th>
            </tr>

        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_array($query)) {
                echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['name']."</td>
                <td>".$row['description']."</td>
                <td>".$row['status']."</td> 
                <td><a href=deletecategory.php?id=".$row['id'].">Delete</a> | <a href=editcategory.php?id=".$row['id'].">Edit</a>|</td>
                
                
                
                </tr>";

            }

               


            ?>
        </tbody>
        </table>
        <?php 

        }
        else {
            echo "Sorry No Record Found";
        }

        ?>

    
</body>
</html>