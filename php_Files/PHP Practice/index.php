<html>
<body>
	<script language="javascript" type="text/javascript">
		function ajaxFunction(){
			var xhttp;
			xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function(){
				if (xhttp.readyState == 4) {
					var ajaxdisplay = document.getElementById('ajaxdiv');
					ajaxdisplay.innerHTML = xhttp.responseText;
				}
			}
			var name = document.getElementById('fname').value;
			var email = document.getElementById('email').value;
			var city = document.getElementById('city').value;
			//var Add = document.getElementByClass('add');
			var querystring= "?fname=" +name;
			querystring += "&email=" + email + "&city=" + city;
			xhttp.open("GET", "server.php"+querystring, true );
			xhttp.send(null);
		}

		function delFunction(Id){
			var xhttp;
			xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function(){
				if(xhttp.readyState == 4){
					var ajaxdisplay = document.getElementById('ajaxdiv');
					ajaxdisplay.innerHTML = xhttp.responseText;					
				}
			}
			xhttp.open("GET","server.php?id="+Id, false)
			xhttp.send(null);
		}
	</script>

	<form  name ='myForm' method = "POST">
		Name :-
		<br><input type="text" id = "fname" placeholder = "Enter Name"><br>
		Email :-
		<br><input type="text" id = "email" placeholder = "Enter Email Address"><br>
		City  :-
		<br><input type ="text" id = "city" placeholder = "Enter City"><br>
		<br><input type = "button" onclick = "ajaxFunction()" value = "Add" class = "add">
		<input type = "reset" value = "Reset" name = "reset" ><br>
	</form>
	<div id='ajaxdiv'> 
		<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "book";
		$conn = mysqli_connect($servername,$username,$password,$dbname);
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
				$display_string .= "<td><input type = 'button' value = 'Delete' id='delete' onclick = 'delFunction(".$Id.")'> <input type = 'button'  value = 'Edit' id = 'edit'></td>";
			}
			$display_string .= '</tr>';
			$display_string .= '</table>';
		}
		echo $display_string;

		mysqli_close($conn);


		?> 
	</div>

</body>
</html>