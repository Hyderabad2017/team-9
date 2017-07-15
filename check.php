<?php

//echo "you have selected :".$selected_type;

  //echo "successful";
  $selected_bloodtype=$_POST['radio'];
  //echo "you have selected :".$selected_type;
  $selected_bloodunits=$_POST['units'];
  $selected_location=$_POST['location'];

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "bloodbank";

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

  $sql = "INSERT INTO bloodrequests VALUES ($id,$bankid,'$selected_bloodtype', $selected_bloodunits);";

  if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();

 ?>
