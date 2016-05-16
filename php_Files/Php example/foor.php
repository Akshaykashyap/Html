<?php
for ($i=1; $i <=11 ; $i++) { 
 	 for ($l=1; $l <=11 ; $l++) { 
 	 	if ($i == $l || $i==12-$l) {
 	 		echo "*";
 	 	}else{
 	 		echo " 0 ";
 	 	}
 	 }
 	 	 echo "<Br>";
     }

     echo "----prin star--------<Br>";
     $count =1; 
     for ($i=1; $i <=6 ; $i++) {

     	for ($j= 1; $j <= $i ; $j++) {
     	
     		echo $count++;
     	}
     	echo "<Br>";
    }


     ?>



    