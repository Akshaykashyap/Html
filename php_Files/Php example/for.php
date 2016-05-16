<?php
 for ($i= 1; $i<=7 ; $i++) {
 	  for ($j=1; $j <=7;  $j++) { 
 	  	   if ($i == $j) {
 	  	   	 echo " * ";
 	  	   }else{
 	  	   	  echo " &nbsp ";
 	  	   }
 	  		
 	  	}
 	  	echo "<Br>";
 	  }
 	  for ($k=1; $k<=6 ; $k++) { 
 	  	 for ($p=6; $p >=1 ; $p--) { 
 	  	 	if ($k == $p) {
 	  	 		echo " * ";
 	  	 	}else{
 	  	 		echo " &nbsp ";
 	  	 	}
 	  	 }
 	  	 echo "<Br>";
 	  }

echo "------------Print peramind-------------------";
  for ($i=1; $i<=4; $i++) { 
  	  echo "<br>*";
  	}
  	for ($j=2; $j >=0; $j--) { 
  		 echo "*";
  		 echo "<Br>";
  }
echo"-------print the star----------<br>";
for ($i=1; $i <=7; $i++) { 
	for ($j=1; $j <=$i; $j++) { 
		echo "*";
	}
	echo "<Br>";
}

for ($i=6; $i >=1 ; $i--) { 
 	for ($j=1; $j <= $i ; $j++) { 
 		echo "*";
 	}
 	echo "<br>";
 }
 	  	


?>