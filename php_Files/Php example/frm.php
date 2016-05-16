<div id="content">

<p>Carry out activities on the Employee Details!</p>

<form name="frmLogin" method="post" onsubmit="return validateForm();" >

 

        <strong>P_NO:</strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" id="txtPno" name="txtPno" placeholder=""  size="25" required>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <button type="submit" SIZE="40" name="search" class="btn btn-info" onclick="disable_text(text);">LOOK</button><br><br>

<strong>F_name:</strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" id="txtFname" name="txtFname" placeholder="" size="25" required><br><br>

<strong>S_name:</strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" id="txtSname" name="txtSname" placeholder="" size="25"required><br><br>

<strong>Department:</strong>

<select name="Department" size="1">

<option value="ICT">ICT</option>

<option value="ACCOUNTS">ACCOUNTS</option>

<option value="INVESTMENT & BUSINESS  ">INVESTMENT & BUSINESS</option>

<option value="PLANNING">PLANNING</option>

<option value="SUPPLIES & PROCUREMENT">SUPPLIES & PROCUREMENT</option>

<option value="ADMINISTRATION">ADMINISTRATION</option>

<option value="REGISTRY">REGISTRY</option>

<option value="AUDITRY">AUDITRY</option>

</select> <br><br>

<strong>Password:</strong>&nbsp&nbsp&nbsp&nbsp <input type="text" id="txtPassword" name="txtPassword" placeholder="" size="25"  required><br><br>

<strong>Balance:</strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" id="txtBalance" name="txtBalance" placeholder="" size="25" required><br><br>

<strong>Forward:</strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" id="txtForward" name="txtForward" placeholder="" size="25"  required><br><br>

<strong>Allowance:</strong>&nbsp&nbsp <input type="text" id="txtAllowance" name="txtAllowance" placeholder="" size="25"  required><br><br>

<strong>Resumption:</strong> <input type="text" id="txtResumption" name="txtResumption" placeholder="" size="25"  required>

 

 

 

<br><br><br><br>

<button type="submit" SIZE="40"name="add" class="btn btn-info" onclick="disable_text(text);">ADD</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<button type="submit" SIZE="40"name="register" class="btn btn-info" onclick="disable_text(text);">UPDATE</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<button type="submit" SIZE="40"name="register" class="btn btn-info" onclick="disable_text(text);">DELETE</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<button type="submit" SIZE="40"name="register" class="btn btn-info" onclick="disable_text(text);">SAVE</button><br><br><hr><a href="/support/top.php"><strong>HOME</strong></a>

<BR><BR><button onclick="history.go(-1);">Back </button>

        </div>

 

<?PHP

if (isset($_POST['add'])){

$fname=$_POST['txtFname'];

$sname=$_POST['txtSname'];

$department=$_POST['Department'];

$pno=$_POST['txtPno'];

$password=$_POST['txtPassword'];

$ldb=$_POST['txtBalance'];

$dbf=$_POST['txtForward'];

$ela=$_POST['txtAllowance'];

$edr=$_POST['txtResumption'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Pdo";
 $conn = mysqli_connect($servername, $username, $password , $dbname);
 $sql="INSERT INTO employee (F_name,S_name,Department,P_NO,Password,Balance,Bforward,Allowance,Resumption) VALUES ('$fname','$sname','$department','$pno','$password','$ldb','$dbf','$ela','$edr')";
  if(mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}
mysqli_close($conn); 

}

 

if (isset($_POST['search'])){

 

$result = mysqli_query("SELECT * FROM 'employee' WHERE 'P_NO'==='pno'");

while($row = mysqli_fetch_array($result))

{

 

    echo "<input type='text' id='txtF' value='$fname' />";

    echo "<input type='text' id='txtS' value='$sname' />";

    echo "<input type='text' id='D' value='Department' />";

 

    echo "<input type='text' id='txtP' value='$password' />";

 

    echo "<input type='text' id='txtB' value='$ldb' />";

 

    echo "<input type='text' id='txtF' input value='$dbf' />";

 

    echo "<input type='text' id='txtA' value='$ela' />";

echo "<input type='text' id='txtR' value='$edr' />";

 

}

}

?> 

</form>

</body> 