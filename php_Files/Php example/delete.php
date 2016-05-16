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

				$.ajax(
				{
					type: "POST",
					url: "Deletefrm.php",
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

	<?php
	$Servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "book";
	$conn = mysqli_connect($Servername, $username, $password, $dbname);
	$str = "SELECT * from record ";
	$result = mysqli_query($conn , $str);
	while ($row = mysqli_fetch_array($result)) {
		$ud = $row['id'];
	}
	$var = "SELECT * from record";
	$result = mysqli_query($conn , $var);
	if ( mysqli_num_rows($result)) {
		echo '<table style = "border: 1px solid black" border = 1 cellspacing = "0px" cellpadding = "5px" align = "center">';
		echo '<tr>';
		echo '<tr>';
		echo '<td>id</td>';
		echo '<td>first_name</td>';
		echo '<td>gender</td>';
		echo '<td>hobbies</td>';
		echo '<td>country</td>';
		echo '</tr>';
		while ($row = mysqli_fetch_array($result)) {
			echo "<tr><td>".$row['id']."</td>";
			$Id = $row['id'];
			echo "<td>".$row['fname']."</td>";
			echo "<td>".$row['gnder']."</td>";
			echo "<td>".$row['hobbi']."</td>";
			echo "<td>".$row['cntry']."</td></tr>";
       // echo "<td><a href= Deletefrm.php?id=". $row['id'] ."><input type = button value ='Delete'><td>";
			echo "<td>".'<input type = "button" value = "Delete" data='. $Id .' class= "delete" >'."<td>";
		} 
		echo '</tr>';
		echo '</table>';
	}
	mysqli_close($conn); 
	?>
