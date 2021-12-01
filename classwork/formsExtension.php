<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms Extension Exercise</title>
    <style>
        body{
                align-content:center;
                width:50%;
                margin:auto;
        }
        </style>
</head>
<body>
 
<form method="POST" action="" name="order">
    <h2>ORDER FORM</h2>
    <h3>Please fillout this form to place your order</h3>
    <fieldset>
        <legend>Enter your login details</legend>
        User Name: <input type="text" name="user" placeholder="Username"/>
        Email: <input type="email" name="email" placeholder="Email"/>
    </fieldset>
    <br>

    <fieldset>
        <legend>Pizza Selection</legend> 
        Size: <input type="radio" name="size[]" value="small"/>small<input type="radio" name="size[]" value="medium"/>medium<input type="radio" name="size[]" value="large"/>large<br><br>
        Topping: <select name="topping" size=1> <option value="seafood">Seafood</option><option value="chicken">Chicken</option><option value="beef">Beef</option><option value="pineapple">Pineapple</option>
        </select>
        <br><br>
        Extras: <input type="checkbox" name="extras" value="Parmesian"/>Parmesian<input type="checkbox" name="extras" value="Olives"/>Olives<input type="checkbox" name="extras" value="Capers"/>Capers<br><br>


</fieldset>
<br>
<input type="submit" name="submit" value="Submit"/>
<input type="reset" name="clear" value="Clear"/>

    
        






</form>
<?php
    //checking the form is submitted or not
    if(isset($_POST['submit'])){

        //capturing the users input
        
        $username=$_POST["user"];
        $email=$_POST['email'];
        $size= $_POST['size'];
        $topping=$_POST['topping'];
        $extras=$_POST['extras'];
        echo "<b><h2>Thank You For Your Order</b></h2>";
        echo"Customer ID: $username";
        echo"<br> Email: $email";
        foreach($size as $s)
        {
            echo"<br> Your Order: ".$s." ".$topping;
        }
        
        echo"<br> Extra Toppings: $extras";

    }
        


?> 

</body>
</html>