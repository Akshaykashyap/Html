
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="Code.php" method = "POST">
		Name :-
		<br><input type="text" name = "fname" placeholder = "Enter Name"></input><br>
		Email :-
		<br><input type="text" name = "mail" placeholder = "Enter Email Address"></input><br>
		City  :-
		<br><input type ="text" name = "cty" placeholder = "Enter City"></input><br>
		<br><input type = "submit" value = "Add" name = "submit" ></input>
		<input type = "reset" value = "Reset" name = "reset" ></input><br>
	</form>
</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book";
$conn = mysqli_connect($servername,$username,$password,$dbname);
$var = "SELECT * FROM records";
$result = mysqli_query($conn,$var);
if ( mysqli_num_rows($result)) {
	echo '<table style = "border: 1px solid black" border = "1px" cellspacing = "0px" cellpadding = "5px" align = "center">';
	echo '<tr>';
	echo '<tr>';
	echo '<td>id</td>';
	echo '<td>First_Name</td>';
	echo '<td>Email</td>';
	echo '<td>City</td>';
	echo '<td>Action</td>';
	echo '</tr>';
	while ($row = mysqli_fetch_array($result)) {
		echo "<tr><td>".$row['id']."</td>";
		$Id = $row['id'];
		echo "<td>".$row['first_name']."</td>";
		echo "<td>".$row['email']."</td>";
		echo "<td>".$row['city']."</td>";
		echo "<td><a href= Code.php?id=".$Id."><input type ='button' value = 'Delete'></a><a href= Design.php?uid=".$Id."><input type = 'button' value = 'Edit'></a></td></tr>";
		//"<td><a href= Deletefrm.php?id=". $row['id'] ."><input type = button value ='Delete'><td>";
	}
	echo '</tr>';
	echo '</table>';
}
if (isset($_GET['uid'])){ 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "book";
	$conn = mysqli_connect($servername,$username,$password,$dbname);
	$var = $_GET['uid'];
	$req= "SELECT * from records where id = $var";
	$result = mysqli_query($conn, $req);
	echo "<form method= 'post'>";
	echo '<table style = "border: 1px solid black" border = "1px" cellspacing = "0px" cellpadding = "5px" align = "center">';
	echo '<tr><td>id </td> <td> Name </td> <td> Email </td> <td> city</td><td>Action</td></tr>';
	while($row = mysqli_fetch_array($result)){

		echo '<tr>';
		echo '</tr>';
		echo '<tr><td><input type="text"value="'.$row['id'].'">'.'</td>';
		echo '<td><input type="text" name="fname" value="'.$row['first_name'].'">'.'</td>';
		echo '<td><input type="text" name="mail" value="'.$row['email'].'">'.'</td>';
		echo '<td><input type="text" name="cty" value="'.$row['city'].'">'.'</td>';
		echo "<td><a href=Code.php?pid=".$row['id']."><input type ='submit' value = 'Update' name = 'update'></a><input type = 'button' value = 'Cancel'>"."</td></tr>";
	}
	echo '</tr>';
	echo '</table>';
	// echo '</form>';

	// if(isset($_POST['update'])){
	// $servername = "localhost";
	// $username = "root";
	// $password = "";
	// $dbname = "book";
	// $conn = mysqli_connect($servername,$username,$password,$dbname);
	// 	$name = $_POST['fname'];
	// 	$nmail = $_POST['mail'];
	// 	$ncity = $_POST['cty'];

	// 	$sqli = "UPDATE records SET first_name='$name',email='$nmail',city='$ncity' where id = $var";
	// 	mysqli_query($conn ,$sqli);
	// header('location:Design.php');
	// }

	mysqli_close($conn);
}
?>

