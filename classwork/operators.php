<?php 
//Arithmetic operator
//Assignment Operator
//Comparison Operator

$num1 = 12;
$num2 = 12;
if($num1==$num2){
    echo "Both are equal <br/>";
}
if($num1===$num2){
    echo "Both are identical <br/>";
}
else{
    echo "Not Identical or Equal <br/>";
}

//logical operators 
$password = "admin123";
$confirm_password = "Admin1234";
$username = "admin";
if($username=="admin" && $password=="admin123"){
    echo "Credential Match";

}
else{
    echo "Username or Password Not Match";
}

//string operators 
//. .= 

$names = "Ram ";
$names.="Sita ";
$names.="Gita ";
$names.="Hari ";
echo "<br/>";
echo $names;
echo "<br/>";


//login concept 
//the value is empty or not
//check the length of the password
//compare the username and password

$username = "admin";
$password="";
if(!empty($username) && !empty($password)){
    if(strlen($password)>=6){
        if($username =="admin" && $password=="admin123")
        {
            echo"Login Success";
        
        }
    else{
        echo "Login Failed";
    }
}
    else{
        echo"Password must be greater than or equal to 6";
    }
}
else{
    echo "Username or password is empty";
}


?>