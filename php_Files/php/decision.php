<?php
echo "-------if-else-statement---------<Br>";
  $i = 11;
   if ($i == 10) {
    echo $i. "    it is a true value<Br>";
  }
    else {
    echo  $i. " it is a false values<br>";
   }

   echo "<br>";
   echo "------if-statement--------<Br>";
     $d = 2;
       if ($d <= 6) {
 	     $d =$d+2;
 	     echo "$d";
       }
  
    echo "<Br>";
    echo "-------------if-elseif-else-statement------------<Br>";
      $p = 1;
       if ($p > 1) {
     	 echo $p." it is a true value";
     	}
     	  elseif ($p < 1) {
     	      echo "it is a second true value";
     	 }
     	  else{
     		  echo "it print the false value";
     		}





?>