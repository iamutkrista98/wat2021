<?php 
error_reporting(0);
//error_reporting(E_ALL & E_NOTICE);
//getting data from url
echo "<a href=error.php?id=1&type=warning>Warning</a>";
echo "<a href=error.php?id=2&type=eall>Eall</a>";
echo "<a href=error.php?id=3&type=fatalerror>FatalError</a>";
if(isset($_GET['id'])&&isset($_GET['type']))
{
    echo $_GET['id'];
    echo '<br/>';
    echo $_GET['type'];
}

$file=fopen("mytestfile.txt","r");

if(file_exists("mytestfile.txt")){
    $file=fopen("mytestfile.txt","r");
}
else {
    die("Error: The file does not exist");
}
$age=30;
echo "The age is: $age";




?>