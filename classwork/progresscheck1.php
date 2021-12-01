<!DOCTYPE html>
<html>
<head><title>WAT Week 5 Progress Check</title></head>
<body>
<h1>WAT Week 5 Progress Check</h1>
<h1>Generate Statements</h1>
<?php
//produce code that will display your name and ID on separate lines
//produce code to output the string "It's not more than £3" including all
//speech marks.
$name = "Utkrista Acharya";
$id = "77261056";
echo 'Name: '.$name.'<br/>';
echo 'ID: '.$id.'<br/>';

echo "\"It's not more than £3\"";
echo '<br/>';
?>
<h1>Use Arithmetic Operators </h1>
<?php
/*Calculate annual interest paid for a loan. Declare two variables one to
*hold the value of loan and one the interest rate. Set these to 500 and 3.5
*respectively. Calculate the annual interest payable based on the formula
*interest paid = (loan amount / 100) x rate of interest
*Display the following statement using your variables:
* Loan: 500
* Rate: 3.5%
* Payable: £17.50
*/
$loan = 500;
$interest = 3.5;
$interestpaid = ($loan/100)*$interest;
echo "Loan: ".$loan.'<br/>';
echo "Rate: ".$interest."%".'<br/>';
echo "Payable: "."£".number_format($interestpaid,2).'<br/>';
?>
<h1>Use Conditional Statements</h1>
<?php
/*Declare variables to hold username and password, assign the values
* "user01" and "pass". Write code that will test the value
* of your two variables and display the word "success" if
* user is "user01" and password is "passwd", or "fail" if not.
*/
$username = "user01";
$password = "pass";
if($username == "user01" && $password =="passwd")
{
    echo "Success";
}
else
{
    echo "Fail";
}
echo '<br/>';
/*Use the same variables but this time write code to first test if
* the password is at least 6 characters in length, if not
* display a message "Please use at least 6 characters", if this test
* is passed then test as before.
*/
$username = "user01";
$password = "pass";
if(strlen($password)<6)
{
    echo "Please use at least 6 characters";
    
}
else
{
    
    if($username =="user01" && $password=="passwd")
    {
        echo "Success";
    }
    else
    {
        echo"Failed";
    }
}

?>
</body>
</html>