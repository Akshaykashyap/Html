<?php
$msg = "";
session_start();
if (isset($_SESSION['err'])){
	foreach ($_SESSION['err'] as $val) {
	   $msg .= $val."<br/>";
	}
	 unset($_SESSION['err']);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Regestration</title>
	<Style>
	   input{
	   	  padding: 5px 10px;
	   	  color:#765353;
	   	}
	   	body{
	   		/*background-image: url("IMG-20151207-WA0003.jpg");
	   		background-size: cover;
	   	}
	</Style>
</head>
<body>
     <form  action="Studreg.php" enctype ="multipart/form-data" method="post"  >
        First Name :- <Br>
          <input type="text" name="fname" placeholder="Enter your first name"></input><br>
          <?php if ($msg != " ") { echo "<div>".$msg."</div>"; $msg = ''; } ?>
        Last Name :- <Br>
          <input type="text" name="lname" placeholder="Enter your last name"></input><br>
          <?php if ($msg != " ") { echo $msg; $msg = ''; } ?>	
        User Name :-<Br>
          <input type="text" name ="usrname" placeholder="Username"></input><br>
            <?php if ($msg != " ") { echo $msg; $msg = ''; } ?> 
        Password :-<Br>
          <input type="password" name="pass" placeholder="Password"></input><br>
           <?php if ($msg != " ") { echo $msg; $msg = ''; } ?> 
        Phone No :-<br>
           <input type="text" name="phn" placeholder="Phone no"></input><Br>
        Gender :-<br>
           <input type="Radio" name="gnder" value="Male"> Male </input>
            <?php if ($msg != " ") { echo $msg; $msg = ''; } ?> 
           <input type="Radio" name="gnder" value="Female">Female</input><br>
        Hobbies :-<Br>
            <input type="checkbox" name="hack[]" value="Cricket">Cricket</input><br>
            <input type="checkbox" name="hack[]" value="Footbal">Football</input><br>
            <input type="checkbox" name="hack[]" value="Reading Book">Reading Book</input><br>
            <input type="checkbox" name="hack[]" value="Tracking">Tracking</input><br>
            <input type="checkbox" name="hack[]" value="Swimming">Swimming</input><br>
        Upload File :-
            <input type ="file" name="image"><br>
             <?php if ($msg != " ") { echo $msg; $msg = ''; } ?>
            <input type ="submit" value="Submit" name="submit">
            <input type="Reset" value="Reset">
   </form>
  </body>
</html>