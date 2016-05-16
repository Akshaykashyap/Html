<?php
var_dump($_POST);
$nme = $_POST["fname"];
$emal = $_POST["email"];
$pwd = $_POST["pswd"];
$conn = mysqli_Connect("localhost", "root", '', "book");
if (!$conn) {
   die ("connection failed". mysqli_error());
}
$sql = "INSERT INTO  clients (name,email,password) values ('$nme','$emal', '$pwd')";
if (mysqli_query($conn , $sql)) {
	echo "The table created successfully";
}
else{
	echo "Error creating database" . mysqli_error();
}

mysqli_close($conn);
?>