<?php
// Initialize variables to null.
$nameError ="";
$emailError ="";
$genderError ="";
$websiteError ="";

//On submitting form below function will execute

if(isset($_POST['submit'])){
   if (empty($_POST["name"])) {
     $nameError = "Name is required";
   } else {
     $name = test_input($_POST["name"]);
     // check name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameError = "Only letters and white space allowed"; 
     }
   }
   
   if (empty($_POST["email"])) {
     $emailError = "Email is required";
   } else {
     $email = test_input($_POST["email"]);
     // check if e-mail address syntax is valid or not
     if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
       $emailError = "Invalid email format";
     }
   }
     
   if (empty($_POST["website"])) {
     $website = "";
   } else {
     $website = test_input($_POST["website"]);
     // check address syntax is valid or not(this regular expression also allows dashes in the URL)
     if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
       $websiteError = "Invalid URL"; 
     }
   }

   if (empty($_POST["comment"])) {
     $comment = "";
   } else {
     $comment = test_input($_POST["comment"]);
   }

   if (empty($_POST["gender"])) {
     $genderError = "Gender is required";
   } else {
     $gender = test_input($_POST["gender"]);
   }
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
//php code ends here 
?>

<!--html starts here-->
<!DOCTYPE HTML> 
<html>
	<head>
	<title>Form Validation with PHP - Demo Preview</title>
	<meta name="robots" content="noindex, nofollow" />
	<link rel="stylesheet" href="style.css" />
	</head>
	<body>
 
		<div class="maindiv">
			<div class="form_div">
			<div class="title"><h2>Form Validation with PHP.</h2></div>

			<form method="post" action="validation.php"> 
				<h2>Form</h2>
				<span class="error">* required field.</span>

				<br>
				<hr/>
				<br>
				Name:<br><input class="input" type="text" name="name" value="">
				<span class="error">* <?php echo $nameError;?></span>
				<br>
		 
				E-mail:<br><input class="input" type="text" name="email" value="">
				<span class="error">* <?php echo $emailError;?></span>
				<br>
				Gender:<br>
				<input class="radio" type="radio" name="gender" value="female">Female
				<input class="radio" type="radio" name="gender" value="male">Male
				<span class="error">*<?php echo $genderError;?></span>
				<br>
		   
				Website:<br><input class="input" type="text" name="website" value="">
				<span class="error"><?php echo $websiteError;?></span>
				<br>
				Comment:<br><textarea name="comment" rows="5" cols="40"></textarea>
				<br>
				<input class="submit" type="submit" name="submit" value="Submit"> 
			</form>
			</div>
			<div class="formget"><a href=http://www.formget.com/app><img src="formget.jpg" alt="Online Form Builder"/></a>
			</div>
		</div>
	</body>
</html>
<!--html ends here-->