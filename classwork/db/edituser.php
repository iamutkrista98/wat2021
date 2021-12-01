<?php
if(isset($_POST['updateuser']))
{
    //getting data from form 
    $uid=$_POST['id'];
    $uusername=$_POST['username'];
    $upassword=md5($_POST['password']);
    $uemail=$_POST['email'];
    $urole=$_POST['role'];
    $ustatus=$_POST['status'];
    include('connection.php');
    if(!empty($upassword)){
        $sql="UPDATE users SET username='$uusername',password='$upassword    ', email='$uemail',role='$urole',status='$ustatus' WHERE id='$uid'";
    }
    else{
        $sql="UPDATE users SET username='$uusername', email='$uemail',role='$urole',status='$ustatus' WHERE id='$uid'";

    }
    $qry=mysqli_query($conn,$sql) or die(mysqli_error($conn));
    if($qry)
    {
        header("Location: userdisplay.php?msg=Data Updated Successfully");
    }
}

if(isset($_GET['id'])){
    
    $editid=trim($_GET['id']);
    //getting data from users table
    $sql="SELECT * FROM users WHERE id = $editid";
    include('connection.php');
    $qry=mysqli_query($conn,$sql) or die(mysqli_error($conn));
    $count=mysqli_num_rows($qry);
    if($count==1)
    {
        while($row=mysqli_fetch_array($qry)){
            $eid=$row['id'];
            $eusername=$row['username'];
            $epassword=$row['password'];
            $eemail=$row['email'];
            $erole=$row['role'];
            $estatus=$row['status'];
            echo "<form method='POST' action='' name='edituser'>";
            echo "<fieldset><legend>EDIT USER $eusername</legend>";

            echo"<label>ID</label><br>";
            echo"<input type='number' name='id' value='$eid' readonly/><br>";
            echo"<label>Username</label><br>";
            echo"<input type='text' name='username' value='$eusername'/><br>";
            echo"<label>Password</label><br>";
            echo"<input type='password' name='password' value='$epassword'/><br>";
            echo"<label>Email</label><br>";
            echo"<input type='email' name='email' value='$eemail'/><br>";
            echo"<label>Role</label><br>";
            echo"<input type='number' name='role' value='$erole'/><br>";
            echo"<label>Status</label><br>";
            echo"<input type='number' name='status' value='$estatus'/><br>";
            echo"<input type='submit' name='updateuser' value='update'/>";




            echo "</fieldset></form>";
        }
    }

    

}
else
{
    header('location:userdisplay.php');
}




?>