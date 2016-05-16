<?php
$var = ($_POST['Id']);
$Servername = "localhost";
$username = "root";
$password = "";
$dbname = "book";
$conn = mysqli_connect($Servername, $username, $password, $dbname);
$query = "DELETE FROM  field WHERE id = $var";
$result = mysqli_query($conn, $query);
var_dump($result);die;
 if ($result) {
 	echo '1';
 }else{
 	echo '0';
 }

?>