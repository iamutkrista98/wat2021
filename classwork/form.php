<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
    //checking the form is submitted or not
    if(isset($_POST['submit'])){

        //capturing the users input
        $username=$_POST["user"];
        $password = $_POST["password"];
        $remember=$_pOST['rememberme'];
        echo"The username is $username";
        echo"<br> The password is $password";
    }
        


    ?>  
    <form action="" method="post" name="login">
        <fieldset>
            <legend>Login</legend>
            <input type="text" name="user" placeholder="Username"/>
            <input type="password" name="password" placeholder="Password"/>
            <input type="checkbox" name="rememberme" value="remember"/>Remember Me<br/>
            <input type="submit" name="submit" value="login"/>
        </fieldset>


    </form>
    
</body>
</html>