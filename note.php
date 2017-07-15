<?php
session_start();
 ?>
<html>
<body>
  <?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "admin";

  //  $bloodtype="O P";
  //$pass=$_POST["pwd"];
  //echo $user;
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  else{
    //echo "connected";
  }
  $sql = "SELECT * FROM events where id=1";
  $result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo  $row["name"];

    $_SESSION['event-name'] = $row["name"];


        ?>
<form id="" method="post" action="register.php">
        <label name="ename" id="ename"><?php echo $row["name"]; ?></label>
        <br>

        <input type="submit" value="REGISTER">
      </form>
    <?php
  }
} else {
    echo "0 results";
}


  $conn->close();
  ?>
</body>
</html>
