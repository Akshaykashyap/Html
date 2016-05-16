<?php
 function writename($abc, $xyz){
   if($abc!=$xyz) {
   	 echo $abc." kashyap <br>";
   	 echo $xyz." katoch<br> ";
    } else {
   	    echo $xyz."katoch<Br>";
      }
 }

 
  writename("Akshay","vivek");

  echo "--------Return-values in Function--------<Br>";
  function Writemsg($a,$b) {
    $z = $a + $b;
  	echo "$z<br>";
  	return $z;
  }
  $y =  Writemsg(10,20);
  echo "$y";
  
 echo"---------form-validation--------<br>";
 ?>

<?php
$var = $_REQUEST['username'];
 $temp = $_REQUEST['email'];
 $xyz = $_REQUEST['password'];
  print_r($var."<br>". $temp ."<Br>".$xyz);
?>

 <html>
   <head> 
     <title> </title>
    </head>
    <body>
      <form action = "<?php $_PHP_SELF ?>", method = "GET";>
        Name :<input type = "text" name = "username"> </input><br>
        E-Mail :<input type = "text" name = "email"> </input> 
        password : <input type = "password" name = "password"> </input>
              <input type ="submit"> </input>
      </form>
    </body>
  </html>



