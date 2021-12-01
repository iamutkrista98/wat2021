<?php
//to connect to mysql
//1.mysql
//2.mysqli
//3.PDO 
$host = "localhost";
$dbname = "l52021aa";
$dbuser = "root";
$dbpass="";

//host,user,password,dbname


$conn = mysqli_connect($host,$dbuser,$dbpass,$dbname) or die
("Unable to connect to database"); 



?>