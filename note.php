<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin";
$id="1";
$bankid="2423";
//  $bloodtype="O P";
//$pass=$_POST["pwd"];
//echo $user;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT name FROM events WHERE id=1;
if ($result=mysqli_query($conn,$sql))
  {
  // Get field information for all fields
  while ($fieldinfo=mysqli_fetch_field($result))
    {
    printf("Name: %s\n",$fieldinfo->name);

    }
  // Free result set
  mysqli_free_result($result);
}
$conn->close();


 ?>
