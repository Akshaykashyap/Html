<?php
echo "=======================================<br>";
echo "-------------Factorial number--------<Br>";
$fact = 1;
$temp = 3;
for ($i = 1; $i <= $temp ; $i++) {
  $fact = $fact * $i;
  echo "$fact";
  echo "<Br>";
}
echo "======================================<Br>";
// 16

echo "----------print the star---------<br>";
for ($p = 1; $p <= 5; $p++) { 
  for ($k = 1; $k <= 10; $k++) { 
    if ($p == $k || $p == 10-$k) {
      echo "*";
    }else{
      echo "0";
    }
  }
  echo "<Br>";
}

// 25

echo "====================================<br>";

echo "----------Febonacci-series------<BR>";
$count = 0;
$A = 0;
$B = 1; 
while ($count < 5 ) { 
  $C = $A + $B;
  echo $C."&nbsp"; 
  $A = $B ; 
  $B = $C ; 
  $count = $count + 1;
  echo "<Br>"; 
}

// 18

echo "=============================================================<Br>"; 
echo "<br>--------------print the values-using if-else------<BR><Br>";

$a = ""; 
$b = 4; 
$c = 7; 
$d = "";
if ($a != "") {
  echo  $a.",";
}
if ($b != "" ) {
  echo $b . ",";
}if ($c != "") {
 echo $c. ",";
}if ($d != "") {
 echo $d; 
}
// $x = 0;    
// $y = 1; 
// for($i=0;$i<=10;$i++)    
//  {    
//     $z = $x + $y;    
//     echo $z."<br />";         
//     $x=$y;       
//     $y=$z;     
// } 

// $count = 0 ;
//  $f1 = 0; 
//  $f2 = 1; 
//  echo $f1.","; 
//  echo $f2; 
//  while ($count < 20 ) { 
//  	$f3 = $f2 + $f1 ; 
//  	echo $f3." , "; 
//  	$f1 = $f2 ; 
//  	$f2 = $f3 ; 
//  	$count = $count + 1; } 
//  	?>