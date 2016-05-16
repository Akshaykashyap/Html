<?php
$name = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pass = $_POST['password'];
$phn =$_POST['phone'];
$conn = mysqli_connect('localhost', 'root', '', 'book');
if (!$conn) {
	die ("Connection Failed" . mysqli_connect_error());
}
$sql = "INSERT INTO user (fisrt_name, last_name, email, password, phone) VALUES ('$name','$lname','$email','$pass','$phn')";
 if(mysqli_query($conn, $sql)){
    echo "The Table Created Successfully";
  }
   else{
   	   echo "Error Message" . mysqli_error($Conn); 
   }
mysqli_close($conn);



?>