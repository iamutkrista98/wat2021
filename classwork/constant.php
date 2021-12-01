<?php
//constant
    echo "<br>";
    define("HOST","localhost");
    define("USERNAME","root");
    define("PASSWORD","");
    define("DBNAME","localhost");

    echo HOST;

    define("PI","3.1416");

    $num = 10;
    echo"<br/> The value is ".$num*PI;
    echo "<br/> The value is ".number_format($num*PI,2);
    echo "<br/> The value is ".round(number_format($num*PI,2));
    echo "<br/> Ceil value is ".ceil(number_format($num*PI,2));
    
    ?>