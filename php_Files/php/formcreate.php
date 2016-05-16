<Script src = "jquery-1.12.2.min.js"></Script>
<Script type = "text/javascript">
	$(document). ready(function(){
		$('.delete').click(function(event){
			event.preventDefault();
			if (confirm("Are you sure you want to delete this row?"))
			{
				var id = $(this).attr('data');
				var data = 'Id=' + id ;
				var parent = $(this).parent().parent();
				console.log(data);
				$.ajax(
				{
					type: "POST",
					url: "submit.php",
					data: data,
					cache: false,

					success: function(data){
						console.log(data);
						if (data == 0) {
							$('.result').html('Something wrong.');
						}else{
							$('.result').html ('Removed.');
							parent.fadeOut('slow', function() {$(this).parent('tr').remove();});
						}
					}

				});
			}
		});
	});
</Script>
<Script src = "jquery-1.12.2.min.js"></Script>
<Script type = "text/javascript">
	$(document). ready(function(){
		$('.edit').click(function(event){
			event.preventDefault();

			var id = $(this).attr('data');
			var data = 'Id=' + id ;
				//alert(data);
				var parent = $(this).parent().parent();
				console.log(data);
				$.ajax(
				{
					type: "POST",
					url: "editform.php",
					data: data,
					cache: false,

					success: function(data){
						console.log(data);
						if (data == 0) {
							$('.result').html('Something wrong.');
						}else{
							$('.result').html ('edit.');
							parent.fadeOut('slow', function() {$(this).parent('tr');});
						}
					}

				});
			}
			);
	});
</Script>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method = "POST">
		Name :-
		<br><input type="text" name = "fname" placeholder = "Name"></input><br>
		Email :-
		<br><input type="text" name = "mail" placeholder = "Email"></input><br>
		City  :-
		<br><input type ="text" name = "cty" placeholder = "City"></input><br>
		<br><input type = "submit" value = "Add" name = "submit" ></input><br>
	</form>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
	$f_name = $_POST['fname'];
	$e_mail = $_POST['mail'];
	$cits = $_POST['cty'];
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "book";
	$conn = mysqli_connect($servername,$username,$password,$dbname);
	if (!$conn) {
		die("Connection Failed :". mysqli_connect_error());
	}
	$sql = "INSERT INTO field (first_name,email,city) values ('$f_name', '$e_mail', '$cits')";
	if (mysqli_query($conn, $sql)) {
		echo "New record created successfully"."<br>";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	$var = "SELECT * from field";
	$result = mysqli_query($conn,$var);
	if ( mysqli_num_rows($result)) {
		echo '<table style = "border: 1px solid black" border = "1px" cellspacing = "0px" cellpadding = "5px" align = "center">';
		echo '<tr>';
		echo '<tr>';
		echo '<td>id</td>';
		echo '<td>First_Name</td>';
		echo '<td>Email</td>';
		echo '<td>City</td>';
		echo '<td>Action</td>';
		echo '</tr>';
		while ($row = mysqli_fetch_array($result)) {
			echo "<tr><td>".$row['id']."</td>";
			$Id = $row['id'];
			echo "<td>".$row['first_name']."</td>";
			echo "<td>".$row['email']."</td>";
			echo "<td>".$row['city']."</td>";
			echo "<td>".'<input type = "button" value = "Edit" class = "edit" data= '.$Id.' name = "addit">  <input type ="button" value = "Delete" data ='.$Id.' class = "delete">'." <td> </td>";
		}
		echo '</tr>';
		echo '</table>';
	}
	
	mysqli_close($conn);

}


?>