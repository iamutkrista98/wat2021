<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name = "David";
    $age = 20;
    $salary = 4000;
    echo("The name is <b>\"$name\"</b> and his age is $age and he is earning \$ $salary");
    echo "<br/>";
    $a = 3;
    echo gettype($a)."<br>";
    $a = 3.1;
    echo gettype($a)."<br>";
    $a = "Hello";
    echo gettype($a)."<br>";
    $a= array("Ram","Shyam","Sita","Gita");
    echo gettype($a)."<br>";
    echo var_dump($a)."<br>";
    $a = NULL;
    echo gettype($a)."<br>";
    $a = true;
    print gettype($a)."<br>";
    echo var_dump($a)."<br>";
    print 6;
    if(print 7){echo "The number is 7";}


    //Arithmetic operations:
    $num1=100;
    $num2=3;
    $sum=$num1+$num2;
    $mul=$num1*$num2;
    $div=$num1/$num2;
    $rem=$num1%$num2;
    echo "<br>";
    echo ("The division value is $div ");
    echo ("The division value is " .number_format($div,2));
    echo "<br>";
    //number_format(num,decimals,decimal_seperator,thousand_seperator)
    echo number_format(1000000,2,".",",");
    echo "<br>";
    $story = "           This is my story which is                      ";
    echo strlen(trim($story));
    echo "<br>";
    echo strtoupper($story);
    echo "<br>";
    echo strtolower($story);
    echo "<br>";
    echo ucfirst($story);
    echo "<br>";
    echo ucwords($story);
    echo "<br>";
    echo trim($story);
    echo "<br>";
    echo ltrim($story);
    echo "<br>";
    echo rtrim($story);
    echo "<br>";
    $sentence = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis maxime totam nesciunt reprehenderit, nihil architecto aspernatur at? Reiciendis dolorum ipsam repellendus esse dolore labore sint voluptate voluptatibus, veritatis ex quae?";
    echo substr($sentence,0,10)."<br>"; 


    //casting
    $x = 23465.768;
    $int_cast = (int)$x;
    echo ($int_cast)."<br>";

    //min and max values

    echo(min(0,150,30,20,-8,-200))."<br>";
    echo(max(0,150,30,20,-8,-200))."<br>";
    
    //square root
    echo(sqrt(64))."<br>";

    //absoulute

    echo(abs(-6.7))."<br>";

    //random number
    echo(rand(1,100));
    $random_string = chr(rand(65,90));
    echo $random_string;

    $random_number = rand(1000,9999);
    echo "<br>";
    echo "The random number and string is: ".$random_string.$random_number;


    //constant
    echo "<br>";
    define("HOST","localhost");
    define("USERNAME","root");
    define("PASSWORD","");
    define("DBNAME","localhost");

    echo HOST;
    

    ?>;

    
</body>
</html>