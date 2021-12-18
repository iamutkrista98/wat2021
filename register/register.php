<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body> 
    <?php
    //initialization 
    $username ='';
    $uemail ='';
    $password = '';
    $age = '';
    $errors=array();
    if(isset($_POST['register']))
    {
        $username = $_POST['username'];
        $uemail = $_POST['uemail'];
        $password = $_POST['upassword'];
        $age = $_POST['age'];
        $passpattern="/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])\S{6,}$/";
        if(empty($username))
        {
            array_push($errors,"Username is required!");
        }
        if(empty($uemail))
        {
            array_push($errors,"Email Address is required!");
        }
        if (!filter_var($uemail, FILTER_VALIDATE_EMAIL)) {
            array_push($errors,"Invalid email format");
        }    
        if(empty($password))
        {
            array_push($errors,"Password is required!");
        }
        if($age=='select')
        {
            array_push($errors,"Age must be selected!");
        }
        if(strlen($username)<6)
        {
            array_push($errors,"Username must be at least 6 characters!");
        }
        if(!isset($_POST['terms']))
        {
            array_push($errors,"Please accept the licence terms and conditions!");
        }
        if(!preg_match($passpattern,$password))
        {
            array_push($errors,"Please make sure password has at least 1 digit,1 uppercase,1 lowercase character!");
        }
        if (!empty($errors) && is_array($errors)) 
        { 
            foreach($errors as $message) {
                echo $message . "<br/>";
            }
        }
        if (count($errors) == 0) {
            $upass=md5($password);
            $sql = "INSERT INTO userregister(username,password,email,age) VALUES('$username','$upass','$uemail','$age')";
            include('connection.php');
            $query = mysqli_query($connection,$sql) or die(mysqli_error($connection));
            if($query){
                header("Location:register.php?msg=User Registered Successfully");
            }
        }

    }
    else{
        header("Location:register.php?msg=Unable to register");
    }


    mysqli_close($connection);




?>
    <form method='post' action='' name='register'>
        <fieldset>
            <legend>Registration</legend>
            <label>Username</label><br>
            <input type='text' name='username' placeholder='Username' value='<?php if(isset($_POST['username']))echo $_POST['username']?>'><br><br>
            <label>Email</label><br>
            <input type='text' name='uemail' placeholder='Enter your email address' value='<?php if(isset($_POST['uemail'])) echo $_POST['uemail']?>'><br><br>
            <label>Password</label><br>
            <input type='password' name='upassword' placeholder='Password' value='<?php if(isset($_POST['upassword'])) echo $_POST['upassword'] ?>'><br><br>
            <label>Age</label><br>
            <select name='age' size='1'><option value='select'<?php if($age=='select') echo ' selected="selected"'; ?>>Select your age range</option><option value='0-12'<?php if($age=='0-12') echo ' selected="selected"'; ?>>0-12</option><option value='13-18' <?php if($age=='13-18') echo ' selected="selected"'; ?>>13-18</option><option value='19-59' <?php if($age=='19-59') echo ' selected="selected"'; ?>>19-59</option><option value='60+' <?php if($age=='60+') echo ' selected="selected"'; ?>>60+</option></select><br><br>
            <input type='checkbox' name='terms'>I accept all the licence terms and conditions<br><br>
            <input type='submit' name='register' value='Register'>   <input type='reset' value='Reset'>

        </fieldset>
    </form>
</body>
</html>