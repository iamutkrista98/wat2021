<?php

//Indexed Arrays - Arrays with a numeric index
//Associative arrays- Arrays with named keys
//Multidimensional arrays - Arrays containing one or more arrays,


$subjects = array("WAT","JAVA","DSA","C++");
//printing JAVA
echo $subjects[1]."<hr>";

//printing all items
for($i=0;$i<=2;$i++)
{
    echo $subjects[$i]."<br> ";
}
echo "<hr/>";

//array count and loop

for($i=0;$i<count($subjects);$i++){
    echo $subjects[$i]."<br>";
}
echo"<hr/>";


//foreach
foreach($subjects as $s)
{
    echo $s."<br/>";
}


//Associative Array 
$age = array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

//printing Peter age
echo $age['Peter'];
echo "<hr>";

foreach($age as $k=>$v)
{
    echo "The Name is $k and Age is $v <br/>";
}

//Multi Dimesion Array
echo"<br>";
$myarray = array(
    //Default key for each will
    //start from 0
    array("Ankit","Ram","Shyam"),
    array("Unnao","Trichy","Kanpur"),
    array("BSC","BBA","+2")
);
//display array info
print_r($myarray);
echo"<hr>";

//print all names and cities 
foreach($myarray as $k=>$v)
{
    echo $k." ";
    echo"<br/>";
    foreach($v as $key =>$values)
    {
        echo $key."=".$values."<br>";
    }
    echo"<hr>";
}

//associative array conversion
$members = array(
    "member1" =>array("Name"=>"Dharma","Salary"=>20,"Department"=>"BCA"),
    "member2" =>array("Name"=>"Rohan","Salary"=>30,"Department"=>"BBA"),
    "member3" =>array("Name"=>"Shreeya","Salary"=>40,"Department"=>"BIT"),
    "member4" =>array("Name"=>"Dipesh","Salary"=>50,"Department"=>"MIA")



);
echo var_dump($members)."<hr/>";

echo "There are ".count($members)."<br>";

foreach($members as $k=>$v)
{
    echo $k."<br>";
    foreach($v as $key=>$values)
    {
        echo $key . " = ".$values." ";
    }
    echo"<hr>";
}







?>