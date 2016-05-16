<?php
/*if(isset($_POST['Id'])) {*/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book";
$conn = mysqli_connect($servername,$username,$password,$dbname);
$req= "SELECT * from records";
$result = mysqli_query($conn,$req);
if (mysqli_num_rows($result)) {
	echo '<table style = "border: 1px solid black" border = "1px" cellspacing = "0px" cellpadding = "5px" align = "center">';
	echo '<tr>';
	echo '</tr>';
	while ($row = mysqli_fetch_array($result)) {
		echo '<tr><td><input type="text"value="'.$row['id'].'">'.'</td>';
		echo '<td><input type="text" name="fname" value="'.$row['first_name'].'">'.'</td>';
		echo '<td><input type="text" name="mail" value="'.$row['email'].'">'.'</td>';
		echo '<td><input type="text" name="cty" value="'.$row['city'].'">'.'</td>';
		//echo "<td>".'<input type = "button" value = "Edit" class = "edit" data= '.$Id.' name = "addit">  <input type ="button" value = "Delete" data ='.$Id.' class = "delete">'." <td> </td>";
	}
	echo '</tr>';
	echo '</table>';
}

mysqli_close($conn);
/*}*/

?>
<!-- <!-- <form id=Id"" name="edit" method="Post">


	<input type="hidden" name="action" value="update" />
	<input type="hidden" name="id" value="<?php echo $Id; ?>" />
	<!--<p class="errormsg" style="display:none;">&nbsp;</p>-->
	<!-- table border="1" cellpadding="2" cellspacing="1" style="border-collapse:collapse; font:12px Verdana, Arial, Helvetica, sans-serif;">

		<!--<tr>
			<td> Id : </td>
			<td> <input type="text" name="id" value="<?php echo $id; ?>"/></td>
		</tr> 

		<tr>
			<td> Name : </td>
			<td> <input type="text" name="fname" value="<?php echo $firstname; ?>"/></td>
		</tr>

		<tr>
			<td> Email: </td>
			<td> <input type="text" name="email" value="<?php echo $email; ?>"/></td>
		</tr>

		<tr>
			<td> City: </td>
			<td> <input type="text" name="cty" value="<?php echo $city; ?>"/></td>
		</tr>
	</table>
</form>
 -->
<!-- ?php
$Servername = "localhost";
$username = "root";
$password = "";
$dbname = "book";
$conn = mysqli_connect($Servername, $username, $password, $dbname);
$temp = "SELECT * from field";
$result = mysqli_query($conn,$temp);
if ( mysqli_num_rows($result)) {
	while ($row = mysqli_fetch_array($result)) {
		$id = $row['id'];
		$firstname = $row['first_name'];
		$email = $row['email'];
		$city = $row['city'];
	}
}

mysqli_close($conn);

}
?> 
 -->