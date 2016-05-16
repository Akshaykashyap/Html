<?php
$nme = $_POST['fname'];
$lnme = $_POST['lname'];
$cls = $_POST['drop'];
$pwd = $_POST['pswd'];
$cpwd = $_POST['Cnpswd'];
$nation = $_POST['nationality'];
$gndr = $_POST['gender'];
$intrst =  implode(",", $_POST['checkbox']);
//$intrst = $_POST['checkbox'];
$cmnt = $_POST['cmt'];
//if (is_uploaded_file($_FILES['image']['tmp_name'])) {
  //$img = "C:/wamp/www/php/Upload/". $_FILES['image']['name'];
//}else $img = null;
$img = "Upload/". $_FILES['image']['name'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Pdo";
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// $sql = "INSERT INTO user_info (first_name, last_name, class, password, confirm_password, nationality, gender, intrest, comment,image) values ('$nme', '$lnme', '$cls', '$pwd', '$cpwd', '$nation', '$gndr', '$intrst', '$cmnt', '$img')";
// if (mysqli_query($conn, $sql)) {
//     echo "New record created successfully"."<br>";
// } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }
// mysqli_close($conn);
//}
try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO user_img (img) VALUES ('$img')";
    $var = "INSERT INTO user_detail (first_name, last_name, class, password, nationality, gender, interest, cmnt) values ('$nme', '$lnme', '$cls', '$pwd', '$nation', '$gndr', '$intrst', '$cmnt')";
    $conn->exec($sql);
    $conn->exec($var);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }


if (isset($_POST)) {
  $err = array();
	if (isset($_POST['fname'])) {
 	  if ($_POST['fname'] == "") {
        $err['fname'] = "it is a Required field";
      }
 	}
  if (isset($_POST['lname'])) {
 	 	 if ($_POST['lname'] == "") {
 	 	 	$err['lname'] = "it is a Required field";
 	 	 }
 	 }
   if (isset($_POST['pswd'])) {
      if ($_POST['pswd'] == "") {
         $err['pswd'] = "Please fill the password ";
        }
    }
    if (isset($_POST['pswd']) && isset($_POST['Cnpswd'])) {
      if ($_POST['pswd'] != $_POST['Cnpswd']) {
        $err['pswd'] = "Password does not match";
      }
    }
    if (count($err)) {
      session_start();
      $_SESSION['err'] = $err;
      header('location: Regform.php');
    } 
    else {
      echo '<span style ="font-size:20px;font-family:Arial; color:#985756"> Your Record </span>'."<br>";
      echo "Your first name is :-  ". $_POST['fname']."<br>";
   	  echo "Your last name is  :-  " . $_POST['lname']."<br>";
   	  echo "Password is  :-" . $_POST['pswd']."<br>";
   	  echo "The Nationality is  :-  ". $_POST['nationality']."<br>";
      if (isset($_POST['gender'])) {
         echo "Your Gender is  :-  ". $_POST['gender']."<br>";
      }
   	 // echo "Your Gender is ". $_POST['gender']."<br>";
      if (isset($_POST['checkbox'])) {
         echo "Your Interest is  :-  ".$intrst;// $_POST['checkbox']."<br>";
      }
   	  //echo "Your Interest is ". $_POST['checkbox']."<br>";
   	  echo "The Comments is  :-  ". $_POST['cmt']."<br>";
       if (isset($_POST['image'])) {
         echo "Upload File". $_POST['image']."<Br>";
       }
      //echo "Upload File". $_POST['image']."<Br>";
			  if (isset($_FILES['image'])) {
			      $path =$_FILES['image']['tmp_name'];
			      $names = $_FILES['image']['name'];
			      move_uploaded_file($path, 'Upload/'.$names);
			      echo '<img src = "Upload/'.$names.'" style = "max-height:1000px; max-width:1000px">';
			    }
    }
 }
?>


 