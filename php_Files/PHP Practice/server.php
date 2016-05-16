<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if (isset($_GET['fname'])) {
	$name = $_GET['fname'];
	if (isset($_GET['email'])) {
		$email = $_GET['email'];
		if (isset($_GET['city'])) {
			$city = $_GET['city'];
			//if (isset($_POST['add'])) {
				$sql = "INSERT INTO records (first_name,email,city) values ('$name', '$email', '$city')";
				if (mysqli_query($conn, $sql)) {
					echo "New record created successfully"."<br>";
				} else {
					echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
			}
		}
	//}
}
$var = "SELECT * FROM records";
$result = mysqli_query($conn,$var);
if ( mysqli_num_rows($result)) {
	$display_string = '<table style = "border: 1px solid black" border = "1px" cellspacing = "0px" cellpadding = "5px" align = "center">';
	$display_string .= '<tr>';
	$display_string .= '<tr>';
	$display_string .= '<td>id</td>';
	$display_string .= '<td>First_Name</td>';
	$display_string .= '<td>Email</td>';
	$display_string .= '<td>City</td>';
	$display_string .= '<td>Action</td>';
	$display_string .= '</tr>';
	while ($row = mysqli_fetch_array($result)) {
		$display_string .= "<tr><td>".$row['id']."</td>";
		$Id = $row['id'];
		$display_string .= "<td>".$row['first_name']."</td>";
		$display_string .= "<td>".$row['email']."</td>";
		$display_string .= "<td>".$row['city']."</td>";
		$display_string .= "<td><input type = 'button' value = 'Delete' id='delete' onclick = 'delFunction(".$Id.")' > <input type = 'button'  value = 'Edit' id = 'edit'></td>";

	}
	$display_string .= '</tr>';
	$display_string .= '</table>';
}
if (isset($_GET['id'])) {
	//print_r($_GET);die();
	$var = $_GET['id'];
	$query = "DELETE FROM  records WHERE id = $var";
	$result = mysqli_query($conn, $query);
}

echo $display_string;

mysqli_close($conn);
?>