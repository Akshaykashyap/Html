<?php
echo "--------aray-------<Br>";
 $x =  array( 0,  1, 2,  3, 4, 5, 6 );
 echo "<pre>";
 print_r($x);
 echo "------print the star-------<br>";
 for ($i = 7; $i >= 1; $i--) { 
   for ($j=1; $j <= $i; $j++) { 
     echo "*";
   }
   echo "<Br>";
 }
 echo "--------print the star------<BR>";
 for ($i= 1; $i <= 7 ; $i++) { 
   for ($j= 1; $j <= $i ; $j++) { 
   	  echo "*";
   	 
   }
    echo"<br>";
}
echo "--------print the 6 star---------<br>";
for ($i= 1; $i <= 7 ; $i++) { 
  for ($j= 1; $j <= $i ; $j++) { 
  	 echo "*";
  }
    echo "<Br>";
}
for ($i= 1; $i <= 6 ; $i++) { 
  for ($j= 6; $j >= $i ; $j--) { 
    echo "*";
  }
    echo "<BR>";
}
echo "-------print the k star--------<Br><Br>";
for ($i = 1; $i <= 10 ; $i++) {
  for ($j = 10; $j >= $i ; $j--) { 
    echo "*";
   } 
     echo "<Br>";
}
for ($i = 1; $i <= 10 ; $i++) { 
  for ($j =1; $j <= $i+1 ; $j++) { 
    echo "*";
  }
    echo "<br>";
}
echo "------print the tri angle---star-----<Br>";
for ($i=1; $i <=10 ; $i++) { 
  for ($j=1; $j <=$i; $j= $j+2) { 
      echo "*";  	 
  }
  echo "<Br>";
}
echo "------print the star------<br>";
for ($i = 1; $i <= 11 ; $i++) { 
	for ($j = 1; $j<=11; $j++) { 
		if ($i == $j) {
			echo "0";
		}else{
			echo "*";
	     }
	 }
		echo "<Br>";
	}
	echo "-------print the star-----<BR> <Br>";
for ($k=1; $k <=11 ; $k++) { 
	for ($p=11; $p >= 1; $p--) { 
		if ($k == $p) {
			echo "0";
		}else{
			echo "*";
		}
	}
	echo "<Br>";
}
echo "-------print the star-----------<Br>";
for ($i= 1; $i <=11 ; $i++) { 
  for ($j = 1; $j <= 11 ; $j++) { 
  	  if ($i ==$j) {
  	  	echo "*";
  	  }else{
  	  	 echo "&nbsp";
  	  }
  }
   echo "<Br>";
}
 for ($k=1; $k <=11 ; $k++) { 
 	for ($p=10; $p >=1 ; $p--) { 
 		if ($k == $p) {
 	       echo "*";
 		}else{
 			 echo "&nbsp";
 		}
 		
 	}
 	 echo"<Br>";
 }
 for ($i=1; $i <=11 ; $i++) { 
 	 for ($l=1; $l <=11 ; $l++) { 
 	 	if ($i == $l) {
 	 		echo "*";
 	 	}else{
 	 		echo "&nbsp";
 	 	}
 	 	for ($k=11; $k >=1; $k--) { 
 	 		 if ($i == $k) {
 	 		 	echo "*";
 	 		 }
 	 	}
 	 }
 	 echo "<Br>";
 }

 echo"<Br>";
 echo "-------print the stae-----<br>";
 
     for ($i=1; $i <=10 ; $i= $i+2) { 
       for ($j=1; $j <=$i ; $j++) { 
        echo "*";     
      }
      echo "<Br>"; 	      
   }
   echo "-------leap year----------- nested-if<br>";
   $var = 2000;
   if ($var % 100 == 0) {
   	  if ($var % 400 == 0) {
   	  	 echo "It is  a leap year<Br>";
   	  }else{
   	  	   echo "it is not a leap year<br>";
   	  }
   }else{
   	    if ($var % 4 == 0) {
   	    	echo "it is a leap year <Br>";
   	    }else{
   	    	 echo "it is not a leap year<BR>";
   	    }
   }
   echo "-------factorial number-------<br>";
   $temp = 1;
   $fact = 5;
   while ($temp <= $fact) {
   	 $fa =$fact*$temp;
   	 echo "the factorial is $fa<Br>";
   	 $temp++;
   }

   // echo "------------stars-----------<Br>";
   // for ($i=1; $i <=5 ; $i++) { 
   // 	$a = $i;
   // 	$b =2* $i-2;
   //   for ($j=1; $j <=2*5-$i ; $j++) { 
   //        echo "";
   //   }
   //   for ($k=1; $k <=$i ; $k++) { 
   //   	 echo "$i";
   //   	 $i++;
   //   }
   //   echo "<Br>";
   // }
     for ($i=1; $i <=5 ; $i++) { 
     	$k =1;
     	 for ($j=1; $j <=5 ; $j++) { 
     	 	echo "$k";
     	 	if ($k == 5) {
     	 		 $k =1;
     	 	}else{
     	 	   $k++;
     	 	}

     	 }
     	  echo "<BR>";
     }
     echo "------------prime no---------<br>";
      for ($i=2; $i <=100 ; $i++) { 
      	 for ($j=2; $j < $i ; $j++) { 
      	 	if($i % $j==0) {
      	 		break;
      	 	}
      	 }
      	 	 if ($i == $j) {
      	 	 	 echo $i;
     
       	 }
       }
      for ($i=1; $i <=7 ; $i++) {
      	for ($j=1; $j <=$i ; $j++) {
      	     
      		echo "A";
      	}
      	 echo "<BR>";
      }
       $n = 5;   
      echo "n = " . $n . "<br>";  
      $count = 1;  
     for ($i = $n; $i > 0; $i--)   
     {  
     for ($j = $i; $j < $n + 1; $j++)   
     {  
      printf("%4s", $count);  
      $count++;  
     }   
     echo "<br>";  
   }  


	?>