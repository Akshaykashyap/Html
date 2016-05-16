<?php
$var = 10;
$chr = 20;
if ($var == $chr) {
	echo "it gives a true value<Br>";
}else{
 	 echo "both values are not equal to it wrong<Br>";
 }

 if ($var != $chr) {
 	 echo "it give a true value";
 }else{
 	 echo "it gives a false value<Br>";
 }

 if ($var < $chr) {
 	echo " the 20 is a greater<br>";
 }else{
 	echo "the 10 is a greater<br>";
 }

 if ($var > $chr) {
 	echo "the 10 is a greater<br>";
 }else{
 	 echo "the value 20 is a greater<br>";
 }

  $result = ($var > $chr) ? $var:$chr;
   echo "the result is $result <Br>";

   $d=date("Fri");
switch ($d)
{
case "Mon":
echo "Today is Monday";
break;
case "Tue":
echo "Today is Tuesday";
break;
case "Wed":
echo "Today is Wednesday";
break;
case "Thu":
echo "Today is Thursday";
break;
case "Fri":
echo "Today is Friday";
break;
case "Sat":
echo "Today is Saturday";
break;
case "Sun":
echo "Today is Sunday";
break;
default:
echo "Wonder which day is this ?";
}





?>