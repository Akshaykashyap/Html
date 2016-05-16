<?php
if (isset($_POST['submit'])) {
  $fisrt_name = $_POST['fname'];
  $gender = $_POST['gnder'];
  $hobbies = implode(",",$_POST['hack']);
  $country = $_POST['drop'];
}
 $Servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "book";
 $conn = mysqli_connect($Servername, $username, $password, $dbname);
 $sql = "INSERT INTO record (fname , gnder, hobbi, cntry) VALUES ('$fisrt_name', '$gender', '$hobbies', '$country')";
  if (mysqli_query($conn, $sql)) {
     echo "New record created successfully"."<br>";
  }else {
     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
   $str = "SELECT * from record ";
      $result = mysqli_query($conn , $str);
      while ($row = mysqli_fetch_array($result)) {
        $ud = $row['id'];
       }
        $var = "SELECT * from record WHERE id = $ud ";
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
     	    echo "<td>".$row['id']."</td>";
            echo "<td>".$row['fname']."</td>";
            echo "<td>".$row['gnder']."</td>";
            echo "<td>".$row['hobbi']."</td>";
            echo "<td>".$row['cntry']."</td>";
          }
           echo '</tr>';
           echo '</table>';
        }
         mysqli_close($conn);
  
 //mysqli_close($conn);
  // $sqi = "SELECT id, fname, gnder, hobbi,cntry FROM record";
  //   if($result = mysqli_query($conn , $sqi)){
  //      if ( mysqli_num_rows($result)) {
  //         while ($row =mysqli_fetch_array($result)) {
  //           echo $row['id']."<br>". $row['fname']."<br>" . ' ' . $row['gnder'] ."<br>" . $row['hobbi'] ."<br>". $row['cntry']."<br>";
           
         // }
      // } 
   // }


?>