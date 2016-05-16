<?php
var_dump($_POST);
if (isset($_POST['submit'])) {
$fnme = $_POST['fname'];
$lnme = $_POST['lname'];
$usr = $_POST['usrname'];
$passwrd = $_POST['pass'];
$phone = $_POST['phn'];
$gdr =$_POST['gnder'];
$hobi = implode(",",$_POST['hack']);
$img = $_FILES['image']['name'];
}
if (isset($_POST['submit'])) {
  	echo "Your First name is  :-".$fnme."<br>"."Your Last name is :-".$lnme. "<Br>". "Username is  :-".$usr. "<Br>" ." Password is :- ". $passwrd ."<Br>"."Phone No is :-".$phone. "<Br>" ." Gender is :-".$gdr."<Br>". "Hobbies Are :-".$hobi. "<Br>" ."upload file :-" .$img;
  	if (isset($_FILES['image'])) {
          $path = $_FILES['image']['tmp_name'];
          $amp = $_FILES['image']['name'];
          move_uploaded_file($path, 'Picture/'.$amp);
          echo '<img src= "Picture/'.$amp.'"/>';
      }
  }
$Servername = "localhost";
$username = "root";
$password = "";
$dbname = "Book";
$conn = mysqli_connect($Servername, $username, $password, $dbname);
$sql = "INSERT INTO student1 (first_name , last_name, user_name, password, phn_no, gender, hobbie, file) VALUES ('$fnme', '$lnme', '$usr', '$passwrd', '$phone','$gdr', '$hobi','$img')";
 mysqli_query($conn,$sql);
 mysqli_close($conn);

if (isset($_POST)) {
 $ary =array();
if (isset($_POST['fname'])) {
  if ($_POST['fname'] == "") {
  	$ary['fname'] = "This is a Required Field Should be Fill"; 
  }
}
  if (isset($_POST['lname'])) {
     if ($_POST['lname'] == "") {
       $ary['lname'] = "Last Name Should be fill";
     }
  }
  if (isset($_POST['usrname'])) {
    if ($_POST['usrname'] == "") {
      $ary['usrname'] = "Username must be fill";
    }
  }
   if (isset($_POST['pass'])) {
   	 if ($_POST['pass'] == ""){
   	 	$ary['pass'] = "Pass should be enter";
   	 }
   }
    if (isset($_POST['gnder'])) {
      if ($_POST['gnder'] == ""){
       $ary['gnder']= "Please Select the Gender";
      }
    }
     if (isset($_POST['image'])) {
        if ($_POST['image'] == "") {
        	$ary['file'] = "Please choose the any file";
        }
     }
     if (count($ary)) {
 	     session_start();
 	     $_SESSION['err'] = $ary;
 	     header('location: Student.php');
     }
   }


  





?>