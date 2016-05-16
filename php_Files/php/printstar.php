<?php
for ($i = 1; $i <= 10; $i++) {
      if($i<=6){ 
     	for ($j = 1; $j <= 6; $j++) { 
     	   if ($j == $i) {
     	   	 echo " * ";
     	   }
     	    else {
                  echo " 0 ";
     	    }
     	}
     }
    else{
      $k = 6;
      $temp = ($i - $k)+1;
      for( ; $k >=1; $k--){
      	if($temp == $k){
      		echo " * ";
      	}
      	 else{
      	 	  echo " 0 ";
      	 }
      }
  }
      echo "<Br>";
}
  for ($i = 1; $i >= 10; $i++) {
      if($i<=6){ 
     	for ($j = 1; $j <= 6; $j++) { 
     	   if ($j == $i) {
     	   	 echo " * ";
     	   }
     	    else {
                  echo " 0 ";
     	    }
     	}
     }
    else {
      $k = 6;
      $temp = ($i - $k);
      for( ; $k <=6; $k--){
      	if($temp == $k){
      		echo " * ";
      	}
      	 else{
      	 	  echo " 0 ";
      	 }
      }
  }
     echo "<Br>";
 }



?>