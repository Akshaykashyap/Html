<?php
$msg = "";
 session_start();
 if (isset($_SESSION['err'])){
   foreach ($_SESSION['err'] as $val) {
     $msg .= $val."<br/>";
    }
    unset($_SESSION['err']);
  }
 ?>
<!DOCTYPE html>
<html>
  <head>
	  <link rel="stylesheet" type="text/css" href="form.css">
   <style>
        .error {color: #FF0000;}
    </style>
  </head>
  <body>
   <form action="data.php" method="POST" enctype="multipart/form-data">
     <fieldset>
       <legend><span class="heading"> USER REGISTRATION FORM</span></legend>
          <span> First Name : </span> 
          <input type = "text" name = "fname" /> <span class = "error">* <br/>
          <?php if ($msg != " ") { echo $msg; $msg = ''; } ?>
          <span> Last Name :</span>  
          <input class = "lnm" type = "text" name = "lname"/> <span class = "error">*<br/>
          <?php if ($msg != " ") { echo $msg; $msg = ''; }  ?>
          <span> Class : </span> 
          <select class = "dropdown" name = "drop">
            <option>--Select class--</option>
    		    <option>1</option>
    		    <option>2</option>
    		    <option>3</option>
    		    <option>4</option>
    		    <option>5</option>
    		    <option>6</option>
    		    <option>7</option>
    		    <option>8</option>
    		    <option>9</option>
    		    <option>10</option>
    		    <option>11</option>
    		    <option>12</option>
    	   </select><br/>
         <span> Password : </span>  
         <input class="pwd" type = "password" name = "pswd"  /> <span class = "error">*  
         <?php if($msg != "") {echo $msg; $msg ='';}?> <br>
         <span> Confirm Password : </span>  
         <input type = "password" name = "Cnpswd"/> <span class = "error">*<br>
         <span> Nationality : </span>  
         <input type = "text" name = "nationality"/><br>
         <span > Gender: </span> 
         <span class="tx1"> Male : </span>  
         <input class="rd1" type = "radio" name ="gender" value  = "male">
	       <span class="tx2"> Female :</span> 
         <input class="rd2"  type = "radio" name = "gender" value = "female"> <br>
	       <span> Interest :</span> <span class="hack"> Hacking : </span>
         <input class="rd3" type ="checkbox" name = "checkbox[]" value="hacking"/>
	       <span class="fot"> Football :</span>
         <input class="rd4" type ="checkbox" name ="checkbox[]" value ="football"/>
	       <span class="cri"> Cricket :</span>
         <input class="rd5" type = "checkbox" name ="checkbox[]" value="cricket"/> <br> <br>
         <span class="cmt">Comments :</span> 
         <textarea class="txarea" name = " cmt" rows="5" cols ="40" maxlength="100"> </textarea><br>
	       <span> Upload Photo : </span>
         <input type ="file" name ="image"/><br>
	       <input class="sbmit" type ="submit" value ="Submit" />
	       <input class="reset" type ="reset" value = "Reset" /><br>
	     </fieldset>

	     
  	  </form>
    </body>
</html>
<?php
$conn = mysqli_connect("localhost", "root", "", "pdo");
if ($conn == FALSE) {
  die("error:".mysqli_connect_error());
}
echo "<form action= search.php method='post'>";




$sql = "SELECT id, first_name, last_name FROM user_detail";
if($result = mysqli_query($conn , $sql)){
  if ( mysqli_num_rows($result)) {
    echo "<select name ='srch'>";
     while ($row =mysqli_fetch_array($result)) {
        $uid = $row['id'];
        echo "<option value = $uid>" . $row['first_name'] . ' ' . $row['last_name'] . "</option>";
     }
     echo "</select>";
     echo "<input type='submit' value='search'>";
  } 
}
echo "</form>";
?>