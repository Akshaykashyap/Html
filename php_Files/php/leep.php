<?php 
$mod = $var % 4;
switch ($mod) {
	case 0:
		echo "this is a leap year";
		
	$x =$n % 100;
	  switch ($x) {
	   	case 1:
	   		echo "it is  leap year";
	   	
	   	$y =$t % 400;
	   	  switch ($y) {
	   	  	case 2:
	   	  		echo "it is a leap year";
	   	  	
	   	  	default:
 	   	  	  echo "it is not a leap year &&";
	   	  		break;   	  
	   	  	}
	   	  }
	   	}
// 	   	default:
// 	   		  echo "it is not a leap year **";
// 	   		break;
// 	   } 
// 	default:
// 		  echo "it is a not leap year ||";
// 		break;
// }

?>