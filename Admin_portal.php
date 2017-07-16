<?php
require("includes/connect.php");

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Signup | BloodBank</title>
         <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
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
     
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php include 'includes/header.php'; ?>
        <div class="container-fluid decor_bg" id="content">
            <div class="row">
                <div class="container">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <h2>Register Blood bank</h2>
						<div>
						   <a href="#" class="btn btn-info" role="button">Register Recipient institution</a> 
						</div>
                        <div class="form-group">
                                 Blood bank names
								<select class="selectpicker">
									 <option value="Select">Select</option>
									 <option value="Social service blood bank">Social service blood bank</option>
									 <option value="Habib mustafa khan blood bank">Habib mustafa khan blood bank</option>
									 <option value="Chiranjeevi eye & blood bank">Chiranjeevi eye & blood bank</option>
						  	     	 <option value="Sanjeevani blood bank">Sanjeevani blood bank</option>
									 <option value="Suraksha blood bank">Suraksha blood bank</option>
						  			 <option value="Gene blood bank">Gene blood bank</option>
						             <option value="ITMR blood bank">ITMR blood bank</option>
									 <option value="Central blood bank">Central blood bank</option>
							    </select> 
								<table class="table">
								<thead>
								  <tr>
									<th>Blood Group</th>
									<th>No.of units</th>
								  </tr>
								</thead>
								<tbody>
								   <?php
									 $hostname = "localhost";
									 $username = "root";
									 $password = "Sri@1204";
									 $dbname = "test";
									 $conn = mysql_connect($hostname, $username, $password);
									 if (!$conn)
									 {
									   die('Could not connect: ' . mysql_error());
									 }
									 mysql_select_db($dbname, $conn);
									 do{
									     $test = mysql_query("SELECT * FROM bank_inventory where id = $num");
										 echo"<tr><td>".$test['BloodGroup']"</td><td>".$test['units']."</td></tr>";
									 }while($test);
									 mysql_close($conn);
									?>
								</tbody> 
							  </table>
						</div>
                    </div>
                </div>
            </div>
        </div>
        <?php include "includes/footer.php"; ?>
    </body>
</html>

