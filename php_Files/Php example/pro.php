<!DOCTYPE html>
<html>
<head>
	<title>Practics</title>
</head>
<body>
 <form method = "POST" action= "data1.php" enctype="multipart/form-data">
 First Name :- <br>
    <input type ="text" name ="fname"></input><br>
 Last Name :- <br>
    <input type="text" name ="lname"></input><br>
 Password  :-<br>
    <input type="password" name ="pass"></input><br>
  Gender :- <Br>
    <input type="radio" name="gender" value=male>Male</input>
    <input type="radio" name="gender" value="female">Female</input><br>
  Skills  :-<br>
    <input type="checkbox" name="hack" value="PHP">PHP</input>
    <input type="checkbox" name="hack" value="javascript">Javascript</input>
    <input type="checkbox" name="hack" value="Html">Html</input>
    <input type="checkbox" name="hack" value=".net">.net</input><br><br>
  Country  :-<Br>
    <select name ="slct"><option>--------Country-------</option>
        <option>India</option>
        <option>Australia</option>
        <option>USA</option>
        <option>Uk</option>
        <option>Chania</option>
    </select><br><br>
   Upload File  :-
      <input type="file" name="images"></input><br><br>
      <input type="submit" value="Submit"></input>
      <input type="reset" value="Reset"></input>
 	</form>

</body>
</html>