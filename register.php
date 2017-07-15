<?php

$id="1";
$event_name=$_POST['ename'];
$user="xyz";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "events";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO regevent VALUES ($id,$event_name,$user);";
if ($conn->query($sql) === TRUE) {
    echo "registered successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();


 ?>
