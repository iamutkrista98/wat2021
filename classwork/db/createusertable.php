<?php
include('connection.php');
$sql = "
CREATE TABLE users(
    id int PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    role int NOT NULL,
    status tinyint(1) NOT NULL
";

$qry=mysqli_query($conn,$sql) or die("Unable to create table");
if($qry)
{
    echo "User table created successfully";
}



//echo "<a href=\"deleteuser.php"? id="$row['id']">delete user</a>";
/*if(isset($_GET['id'])){
query connection $conn

if($qry)

}
else
{
    header("location:selectuser.php");
}


*/
?>