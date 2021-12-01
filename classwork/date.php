<?php 
// Thursday, 28th October 2021
echo date("D l");
echo("<br>");
echo date("l, dS F Y");
echo"<br>";
date_default_timezone_get();
echo"<br>";
date_default_timezone_set("Asia/Kathmandu");
echo date("h:i:s A");
echo "<br>";
date_default_timezone_set("Australia/Sydney");
echo "Sydney time is ".date("h:i:s A");
echo"<br>";

//switch case

$dayname = date("l");
switch($dayname){
    case 'Friday':
        {
            echo"Oh! its Good Friday!";
            break;
        }
        case 'Saturday':
        case 'Sunday':
        {
                echo "Holiday! ";
                break;

        }
        default:
        {
            echo"Its a regular College Day!";
            break;
        }
        
            
}


?>