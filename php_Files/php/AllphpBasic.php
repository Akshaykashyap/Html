<?php
echo "----------print the table------------<br>";
  for ($i=1; $i <=10 ; $i++) { 
       echo   " 2 " . " x " . "$i = " . $i * 2;
       echo "<Br>";
    }
      echo "------------print the star--------<br>";
        for($i = 1; $i <= 5; $i++){
            for($j = 1; $j <= $i; $j++){
              echo " * ";
            }
              echo "<Br>";
        } 
          echo "--------------print the star----------<Br>";
            for ($i= 1; $i <= 5 ; $i++) { 
                 for ($j = 5; $j >= $i ; $j--) { 
                    echo "*";
                 }
                  echo "<Br>";
             } 
               echo "-----------print the star--------<Br>";
                  for ($i=1; $i <=10 ; $i++) { 
                      for ($j = 10; $j >= $i ; $j--) { 
                      	echo " * ";
                      }
                        // for ($k = 5; $k >= $i ; $k--) { 
                        // 	echo " * ";
                        // }
                        echo "<br>";
                  }  
                    for ($i=1; $i <=10 ; $i++) { 
                       for ($j = 1; $j <= $i ; $j++) { 
                      	echo " * ";
                      }
                        // for ($k = 5; $k >= $i ; $k--) { 
                        // 	echo " * ";
                        // }
                        echo "<br>";
                  }  
                    echo "------------print the k star -----------------------<br>";    
                       for ($i=1; $i <=10 ; $i++) { 
                       	  if ($i <= 5) {
                       	 
                            for ($j = 5; $j >= $i ; $j--) { 
                      	      echo " * ";
                      	  }
                      }
                         else {
                         for ($k = 6; $k <= $i ; $k++) {
                      
                            	echo " * ";
                            } 
                         echo "<br>";
                   }  
              }
              $ary = array('1', 2, 3, 'ky' => array('a', 'b', 'c'), 5);
foreach ($ary as $key => $val) {
  echo "Key = $key, val = $val <br/>";
}




?>