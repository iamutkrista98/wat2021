<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Register</title>
</head>
<body>

<?php
if(isset($_POST['userregister']))
{
    //getting users input
    $user=$_POST['username'];
    $pass=md5($_POST['password']);
    $email=$_POST['email'];
    $role=$_POST['role'];
    $status=0;

    //sql query
    $sql = "INSERT INTO users(username, password, email, role, status)VALUES('$user', '$pass', '$email', $role, $status)";
    //connect to database
    include('connection.php');
    //executing the query
    $qry = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    if($qry)
    {
        header("Location: userdisplay.php?msg=Data Inserted Successfully");
        //echo "Data Inserted Successfully";
    }
}

?>
    <form method="POST" action="" enctype="multipart/form-data" name="register">
        <fieldset><legend>User Registration</legend>
        <label>USername</label><br/>
        <input type="text" name="username" /><br/>
        <label>password</label><br/>
        <input type="password" name="password" /><br/>
        <label>Email</label><br/>
        <input type="email" name="email" /><br/>
        <label>Role</label><br/>
        <input type="radio" name="role" value="1" />Admin
        <input type="radio" name="role" value="2" />User<br/>
        <input type="submit" name="userregister" value="Register" />
    </fieldset>
</form>
    
</body>
</html>