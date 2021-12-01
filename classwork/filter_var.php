<?php 

$number=12.53;
//validating the int input
if(filter_var($number,FILTER_VALIDATE_INT))
{
    echo "Input is integer";
}
else 
{
    echo"Input is not valid format";
}
$email = "me@gmail.com";
echo "<br/>";
if(filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo "Valid Email";

}
else 
{
    echo "Invalid Email";
}

$email =filter_var("me@(sdsfjahfa).com",FILTER_SANITIZE_EMAIL);
echo "<br/>".$email;

$string =filter_var("<script>alert('Hello')</script>",FILTER_SANITIZE_STRING);
echo "<br/>".$string;
echo "<br/>";

//preg match 
$number = 3;
$pattern="/^\d+$/";

if(preg_match($pattern,$number))
{
    echo "Number is valid format";
}
else 
{
    echo "Number is not in valid format";
}



?>