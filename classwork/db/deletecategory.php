<?php 
if(isset($_GET['id']))
{
    //getting delete id from url code 
    $delid = $_GET['id'];
    //sql query
    $sql = "DELETE FROM category WHERE id = '$delid'";
    //making a connection to database
    include('connection.php');
    //executing query
    $qry=mysqli_query($conn,$sql) or die(mysqli_error($conn));
    if($qry) //if success 
    {
        header("Location:categorydisplay.php?msg=$id deleted");
    }
    else {
        header('Location:categorydisplay.php');
    }
    mysqli_close($conn);
}




?>