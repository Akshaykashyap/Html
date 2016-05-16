<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if (!$conn) {
	die("Connection Failed :". mysqli_connect_error());
}
if (isset($_POST['submit'])) {
	$f_name = $_POST['fname'];
	$e_mail = $_POST['mail'];
	$cits = $_POST['cty'];
	$sql = "INSERT INTO records (first_name,email,city) values ('$f_name', '$e_mail', '$cits')";
	if (mysqli_query($conn, $sql)) {
		echo "New record created successfully"."<br>";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}


$var = ($_GET['id']);
$query = "DELETE FROM  records WHERE id = $var";
$result = mysqli_query($conn, $query);

if(isset($_POST['update'])) {
	$ver = $_GET['pid'];
	$name = $_POST['fname'];
	$nmail = $_POST['mail'];
	$ncity = $_POST['cty'];

	$sqli = "UPDATE records SET first_name='$name',email='$nmail',city='$ncity' where id = $ver";
	mysqli_query($conn ,$sqli);
	// mysqli_close($conn);
	// header('location:Design.php');

}
mysqli_close($conn);
header('location:Design.php');



?>