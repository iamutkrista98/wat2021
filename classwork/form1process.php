<?php 
if(isset($_POST['submit'])){
    echo "Form Submitted";
    //capturing the data
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $email = $_POST["email"];
    $gender=$_POST["gender"];
    $city=$_POST["city"];
    echo "<br> You Have Entered the following fields:";
    echo "<br>Username = $username";
    echo "<br>Password = $password";
    echo "<br>ConfirmPassword = $cpassword";
    echo "<br>Email = $email";
    echo "<br>Gender = $gender";
    echo "<br>City = $city";

}
else{
    header("Location: form1.php");
}


?>