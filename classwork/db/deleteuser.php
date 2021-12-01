<?php
if(isset($_GET['id']))
{
    //getting the delete id from urldecode
    $delid=trim($_GET['id']);
    $sql="DELETE FROM users WHERE id=$delid";
    include('connection.php');
    $qry=mysqli_query($conn,$sql) or die(mysqli_error($conn));

    if($qry){
        header('Location:userdisplay.php?msg=$id Deleted');
    }







    mysqli_close($conn);

}
else
{
    header('Location:userdisplay.php');
}



?>