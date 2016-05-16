<?php
$var = ($_POST['Id']);
$Servername = "localhost";
$username = "root";
$password = "";
$dbname = "book";
$conn = mysqli_connect($Servername, $username, $password, $dbname);
$query = "DELETE FROM  record WHERE id = $var";
$result = mysqli_query($conn, $query);
 if ($result) {
 	echo '1';
 }else{
 	echo '0';
 }
      //while ($row = mysqli_fetch_array($result)) {
      // }
//header('location:del.php');
    //    $query = "DELETE FROM  record WHERE id = " . $_POST["del"];
    // $result = mysqli_query($con, $query);
?>