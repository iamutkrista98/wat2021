Progress Check 2
<!DOCTYPE html>
<html>
<head>
<title>Progress Check 2</title>
</head>
<body>
<h1>Basic</h1>
<?php
//Declare two variables assign one your name and the other your id
//Echo out a statement below using concatenation
//My name is Paul and my id is c123456

$name = "Utkrista Acharya";
$id = "c7261056";
echo "My name is ".$name." and my id is ".$id;

?>
<h1>Loops</h1>
<?php
//Declare an array to hold the name of 4 colours
//Set up a while loop - don't forget the counter
//Set the loop condition to loop for the length of the array
//In the loop echo out the counter and a colour from the array
//at the location pointed to by the counter
//Don't forget to increment the counter
//Output like below:
//0 Blue
//1 Yellow
//2 Red
//3 Black
$colours = array("Blue","Yellow","Red","Black");
$count=0;
while($count<4)
{
    echo $count." ".$colours[$count];
    $count=$count+1;
    echo "<br>";
}

?>
<h1>Forms</h1>
<form method="post" action=" " method="POST">
<p><label>Userid:</label></p>
<input type="text" name="txtUser" value="" />
<p><label>Password:</label></p>
<input type="password" name="txtPass" value="" />
<p><input type="submit" value="Submit" name="subUser"/></p>
</form>

<?php
//complete the form method and the form object names
//collect the data entered into the form and echo to screen
//As an extra - block processing of form until submitted
if(isset($_POST['subUser'])){
    //caputuring the values
    $username = $_POST['txtUser'];
    $password = $_POST['txtPass'];
    echo "Here are the details you submitted: <br>";
    echo "USERNAME: $username";
    echo "<br> PASSWORD: $password";
}

?>
</body>
</html>