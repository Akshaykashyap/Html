<?php
echo "------------------------table of the  10 multiplication------------------------<br>";
$x = 10;
 for($i = 1; $i <= 10; $i ++)
  {
    $var = $x * $i;
   echo " $x * $i = " . $var .'<br>';
}
  echo "-----------------leap year program--------------------<br>";
$x = 2012;
if(($x % 4) == 0) {
  echo "This is a leap year<br>";
}
elseif(($x % 100)!= 0){
  echo "This is not a leap year<br>";
}
elseif(($x % 400) == 0)
{
  echo "This is a leap year<br>";
}
else
{
  echo "this is not a leap year<br>";
}
  echo "--------------odd and even----------------<br>";

$x = 13;

if (($x % 2) == 0) {
	echo "$x"  ."it is a even number<Br>";
}
else{
  echo "$x" . "it is a odd number<br>";
}
  echo "--------------conditions programs---------<br>";
$x = 70;
$y = 30;
	if ($x <= $y) {
	echo "y is a greater<br>";
	}		
	else{
  echo "x is a greater<br>";
}
// echo "febonacci series<Br>";
// $first = 0;
// $second = 1;
// $n =20;
// print $first;
// for($i=1;$i<=$n-1;$i++)
// {
// $final = $first + $second;
// $first = $second;
// $second = $final;
// print $final;
// }
echo "find the value of the largest values<br>";
$x = 10;
$y = 30;
$z = 39;
if ($x > $y && $x > $z)
{
	echo "$x". "x is a greater<br";
}
elseif($y > $x && $y > $z )
{
  echo "$y"."Y is a greater<br>";
}
else{
	echo " $z<br>". "Z is a greater<br>";
}
echo "------switch statement--------------<br>";
$favcolor = "red";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!<br>";
        break;
    case "blue":
        echo "Your favorite color is blue!<br>";
        break;
    case "green":
        echo "Your favorite color is green!<br>";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!<br>";
}
?>

	