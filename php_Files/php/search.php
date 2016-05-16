<?php
$conn = mysqli_connect("localhost", "root", "", "pdo");
if ($conn == FALSE) {
  die("error:".mysqli_connect_error());
}

$search = $_POST['srch'];
$sql = "SELECT * from user_detail join user_img USING(id) where id = $search";

if($result = mysqli_query($conn , $sql)){
  if ( mysqli_num_rows($result)) {
  	echo '<table style = "border: 1px solid black" border = 1 cellspacing = "0px" cellpadding = "5px" align = "center">';
  	echo '<tr>';
  	echo '<tr>';
  	echo '<td>U_id</td>';
  	echo '<td>first_name</td>';
  	echo '<td>last_name</td>';
  	echo '<td>class</td>';
  	echo '<td>password</td>';
  	echo '<td>nationality</td>';
  	echo '<td>gender</td>';
  	echo '<td>interest</td>';
  	echo '<td>cmnt</td>';
    echo '<td>Image</td>';

  	echo '</tr>';
     while ($row =mysqli_fetch_array($result)) {
     	echo "<td>".$row['id']."</td>";
        echo "<td>".$row['first_name']."</td>";
        echo "<td>".$row['last_name']."</td>";
        echo "<td>".$row['class']."</td>";
        echo "<td>".$row['password']."</td>";
        echo "<td>".$row['nationality']."</td>";
        echo "<td>".$row['gender']."</td>";
        echo "<td>".$row['interest']."</td>";
        echo "<td>".$row['cmnt']."</td>";
        echo '<td><img src = "'.$row['img'].' " style="max-width:200px; max-height:200px"></td>';
     }
     echo '</tr>';
     echo '</table>';
  }
}


?>