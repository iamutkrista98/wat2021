<?php
/*Output should be

I just wanted to say that's fine
The day is Saturday
The Count is 300
Occuptaion Level:24.82%
 */

//declare some variables
 $day='Saturday';//bug
 $count=300;//bug

//Output to screen
 echo 'I just wanted to say that\'s fine';//bug
 echo '<br/>';
 echo 'The day is '.$day.'<br/>';//bug
 print 'The Count is '.$count;//bug
 echo '<br />';

 //Some aritmetic
 
 $people=34;
 $places=137;
 
 $occupation=number_format($people/$places*100, 2);
 echo 'Occupation level: '.$occupation.'%';
 
 
?>