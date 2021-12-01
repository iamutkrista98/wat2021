<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First PHP</title>
</head>
<body>
    <?php  //My First PHP
    $name = "Utkrista Acharya";
    $id = "77261056";
    echo($name)."<br/>";
    echo($id)."<br/>";
    echo("<h2><b>Using Escape Characters</b></h2>");
    echo("\"most programmers say it's better to use 'echo' rather than 'print'\" says who?");
    echo("<h2><b>Variables</b></h2>");
    $name = "Utkrista Acharya";
    $age = "22";
    echo 'Hi my name is '.$name.' and I am '.$age.' years old<br>';
    echo 'Mi';echo('nombre ');echo('es ');echo $name;echo(' y ');echo(' tengo');echo(' '.$age);echo(' anos');echo(' de');echo(' edad');
    echo("<h2><b>Functions</b></h2>");
    //gettype()returns..the data type of the variable and prints it on the string: which for this case is $name variable which is of type string
    echo gettype($name);
    echo '<br />';
    //strlen() returns..the length of the string variable $name including spaces which in the case is 16 
    echo strlen($name);
    echo '<br />';
    //strtoUpper()returns..the string variable supplied to its upper case variant by capitalizing each letter on the supplied string $name
    echo strtoUpper($name);
    echo("<br>");
    echo("<h2>Arithmetic</h2>");
    $num1 = 9;
    $num2 = 12;
    echo($num1." * ".$num2." = ".($num1*$num2)."<br/>");
    echo($num1." as a % of ".$num2." = ".(($num1/$num2)*100)."%");
    echo("<br/>");
    echo($num2." divided by ".$num1." = ".floor($num2/$num1)." remainder ".($num2%$num1));
    echo("<br/></br>");
    $heightinmeters = 1.8;
    $heightininches = (($heightinmeters*100)/2.54); 
    $temp = $heightininches;
    echo('Name: '.$name);
    echo("<br>");
    echo('Age: '.$age.'<br/>');
    echo('Height in Meters: '.$heightinmeters.'<br/>');
    echo('Height in Feet and inches: '.floor($heightininches/12).'ft '.($temp%12).'ins');

    ?>;
    
</body>
</html>