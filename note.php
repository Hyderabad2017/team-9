<?php
session_start();
 ?>
<html>
    <head>
        
        
        
		<title></title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/seller_profile.css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="css/modal.css" rel="stylesheet" type="text/css"  media="all" />
        <!-- Custom CSS -->
       
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
	

		
		
       
    </head>
<body>
     <?php include 'includes/header1.php'; ?>
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "bloodbank";
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
     <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
        
       
       <br>
        <hr class="w3-clear">
        <form id="" method="post" action="register.php">
        <label name="ename" id="ename"><?php echo $row["name"]; ?></label>
        <br>

        <input type="submit" value="REGISTER">
      </form>
        
        <p></p>
        
      </div> 
     

    <?php
  }
} else {
    echo "0 results";
}
  $conn->close();
  ?>
    <?php include 'includes/footer.php'; ?>
</body>
</html>