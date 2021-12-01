<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display All Users</title>
</head>
<body>
    <?php
    if(isset($_GET['msg']))
    {
        echo "<h2>".$_GET['msg']."</h2>";
    }

    $sql ="SELECT * FROM users ORDER BY id ASC";
    include('connection.php');
    $query=mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $count=mysqli_num_rows($query);
    if($count>=1)
    {
        echo "<h1>There are $count Records.</h1>";

    ?>
    <h3><a href="userregister.php">Add Records</a></h3>
    <table border="1">
        <thead>
            <tr>
            <th>ID</th>
            <th>USername</th>
            <th>Password</th>
            <th>Email</th>
            <th>Role</th>
            <th>Status</th>
            <th>Actions</th>
         </tr>
        </thead>
        <tbody>
            <?php
            while($row=mysqli_fetch_array($query))
            {

        echo "
            <tr>
                <td> ".$row['id']."   </td>
                <td>  ".$row['username']."   </td>
                <td>  ".$row['password']."  </td>
                <td>  ".$row['email']."   </td>
                <td>  ".$row['role']."   </td>
                <td>  ".$row['status']."   </td>
                <td> 
                 <a href=deleteuser.php?id=".$row['id'].">DELETE</a> | 
                 <a href=edituser.php?id=".$row['id'].">EDIT</a> |  </td>
            </tr>";
            }

            ?>
        </tbody>

    </table>

    <?php
    }

    else
    echo "Sorry no records found";
    ?>
    
</body>
</html>