<?php
 echo $file =fopen("Star.php","r");
 echo "--------------Global-Varialbles-------<Br>";
  $x = 25;
  $y = 25;
  function addition(){
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    echo $GLOBALS['z'];
   
  }
  addition();
  //echo $z;


?>