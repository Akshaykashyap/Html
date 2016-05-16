<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
	<Style>
	   input{
	   	  padding: 5px 10px;
	   	  color:#765353;
	   	}
	</Style>
</head>
<body>
  <form method="POST" action="hello.php">
    <fieldset>
      <legend>The Following Record</legend>
      Name :-<br>
        <input type ="text" name ="fname"></input><br>
      Gender :-<br>
        <input type="Radio" name="gnder" value="Male"> Male </input>
        <input type="Radio" name="gnder" value="Female">Female</input><br>
      Hobbies :-<Br>
        <input type="checkbox" name="hack[]" value="Cricket">Cricket</input><br>
        <input type="checkbox" name="hack[]" value="Footbal">Football</input><br>
        <input type="checkbox" name="hack[]" value="Reading Book">Reading Book</input><br>
        <input type="checkbox" name="hack[]" value="Tracking">Tracking</input><br>
        <input type="checkbox" name="hack[]" value="Swimming">Swimming</input><br><br>
      <select  name = "drop">
        <option>--Country--</option>
        <option>India</option>
        <option>Pakistan</option>
    	<option>Australia</option>
        <option>Iraland</option>
    	<option>China</option>
        <option>Japan</option>
      </select><br/></Br>
      <input type ="submit" value="Submit" name="submit">
      <input type="Reset" value="Reset">
    </fieldset>
 </form>
</body>
</html>