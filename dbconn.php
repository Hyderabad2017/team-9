<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sample";


$user=$_POST["usr"];
$pass=$_POST["pwd"];

//echo $user;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO login VALUES (2,'$user', '$pass');";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</body>
</html>