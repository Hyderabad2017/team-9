<?php

session_start();

//$id="1";
//echo $_SESSION['event-name'];
$event_name= $_SESSION['event-name'];
$user="xyz";
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "bloodbank";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO regevent VALUES ('','$event_name','$user');";
if ($conn->query($sql) === TRUE) {
    echo "<h2>registered successfully</h2>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
 ?>