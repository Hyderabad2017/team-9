<html>
<body>
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
  else{
    //echo "connected";
  }
  $sql = "SELECT * FROM events where id=1";
  $result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo  $row["name"];
        ?><label><?php echo $row["name"]; ?></label>
        <br>
        <input type="submit" value="REGISTER">
    <?php
  }
} else {
    echo "0 results";
}


  $conn->close();
  ?>
</body>
</html>
