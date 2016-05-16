<!Doctype html>
<HTML>
	<HEAD> </HEAD>
	<BODY>
	<?php 
	echo "hello world!";
	$capital = 65;
	echo("the variable capital is $capital<br>");
	echo("the variable capital is $capital<br>");
	$greeting="welcome to the php";
	echo "$greeting";
	if (3==2+1)
		echo("this is a true value");
	if(3==2+1)
	{
		echo "this is the true answere";
		echo "this is the great experience";

	}
	//$many = 2.222234;
	//$many_2 = 34.8488484;
	//$few = $many + $many_2;
	//echo "$few";
	//strings
	$varcar_24 ="hello this is my first file in the php";
	$firstfile_23fff ="hello i am new in this format";
	$goldcinema_jjf23 ="hello php is better than the html";
	$gold ="the price of the gold is too high";
	echo "$varcar_24<Br>";
	echo "$firstfile_23fff<br>";
	echo "$goldcinema_jjf23<Br>";
	echo "$gold";

	//function parameters
	function multiply ($value) { 
    $value = $value * 10; 
    return $value; 
}  
$retval = multiply (10); 
Print "Return value is $retval<br>";
$somevar = 15; 

function addit() { 
GLOBAL $somevar; 
$somevar++; 
print "Somevar is $somevar"; 
} 
addit();

function keeptrack(){
	static $var = 0;
	$var++;
	print "$var\n";
	print " \n";
}
keeptrack();
keeptrack();
keeptrack();
keeptrack();
define ("minsize", 50);
echo minsize;
echo constant("minsize");

//operators
 $var_a =10;
 $var_b =20;
  $var_c =$var_a + $var_b;
  echo " the addition of the a and b is = $var_c \n";

   if($var_a &&$var_b){
   	echo("Both a and b are true<br/");
}
else
{
	echo (" Either a or b is false<br/");
}
  $a=10;
  $b=20;
  $result = ($a > $b ) ? $a :$b;
   echo("print the value of a=$a<br>");

 	echo("print the value of b=$b<br>");
   //Decision macking statements
     $a=2;
     $b=3;
 	 if (2>=3) {
 	 	echo "print the value of a= $a";
 	 }
 	 else
 	 {
 	 	echo "prin the value of b=$b";
 	 }

 	 //example of weekand
    
    $s=date("f");
    if ($s=="fri") {
    	echo "hava a nice weekand";
    }
    else
    {
    	echo "have a nice day";
    }
     //loops
     $a=10;
     $b=20;
     for($i=0;$i<5; $i++)
     {
     	echo "print the value of i=$";
     }
     $i=0;
     $num=50;
     
     while ($i<10) {
       $i++;
       $num--;

     }
       echo"the value of the i=$i and value of num=$num";
    ?>
	</BODY>
</HTML>