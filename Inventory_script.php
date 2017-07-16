<?php

//Define your host here.
$hostname = "localhost";

//Define your database username here.
$username = "root";

//Define your database password here.
$password = "Sri@1204";

//Define your database name here.
$dbname = "test";

 $conn = mysql_connect($hostname, $username, $password);
 
 if (!$conn)
 
 {
 
 die('Could not connect: ' . mysql_error());
 
 }
 
 mysql_select_db($dbname, $conn);
 if (preg_match($num, $id)) 
 {
  $query = "SELECT blood_group,units FROM Bank_Inventory";

  $result = mysqli_query($con, $query) or die(mysqli_error($con));
   
  while($test = mysql_fetch_array($result))
	{
     echo"<table><tr><td>O+</td><td>".$test['O+']."</td></tr>";
	 echo"<tr><td>O-</td><td>".$test['O-']."</td></tr>";
	 echo"<tr><td>A+</td><td>".$test['A+']."</td></tr>";
	 echo"<tr><td>A-</td><td>".$test['A-']."</td></tr>";
	 echo"<tr><td>B+</td><td>".$test['B+']."</td></tr>";
	 echo"<tr><td>B-</td><td>".$test['B-']."</td></tr>";
	 echo"<tr><td>AB+</td><td>".$test['AB+']."</td></tr>";
	 echo"<tr><td>AB-</td><td>".$test['AB-']."</td></tr></table>";
    }
  mysql_close($conn);
   
  header('location: User_profile.php');

 }
 
?>