
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
        
        
                        <h2>Register Blood bank</h2>
						<div>
						   <a href="#" class="btn btn-info" role="button">Register Recipient institution</a> 
						</div>
                        
						<form method="post" action="">
                                 Blood bank names
								<select name="pick">
									 
									 <option value="1">Social service blood bank</option>
									 <option value="2">Habib mustafa khan blood bank</option>
									 <option value="3">Chiranjeevi eye & blood bank</option>
						  	     	 <option value="4">Sanjeevani blood bank</option>
									 <option value="5">Suraksha blood bank</option>
						  			 <option value="6">Gene blood bank</option>
						             <option value="7">ITMR blood bank</option>
									 <option value="8">Central blood bank</option>
							    </select> 
								<input type="submit" value="Submit the form"/>
</form>
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
									 $password = "";
									 $dbname = "bloodbank";
									// echo "hbasbbass";
									 if (isset($_POST['pick']))
{//echo "hbasbbass";
    $category = $_POST['pick'];
    echo "$category";
}
									 $conn = new mysqli($hostname, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  else{
    //echo "connected";
  }
									     $test = ("SELECT * FROM bank_inventory where id = $category");
										 $result = $conn->query($test);
										 while ($result = $conn->query($test)) {
                                    	 $row=mysqli_fetch_array($result);
										 echo $row['BloodGroup'];
                                         }

										 
										 //"<tr><td>".$test['BloodGroup']."</td><td>".$test['units']."</td></tr>";
									 //}while($test);
									 $conn->close();
									?>
								</tbody> 
							  </table>
						
        
    </body>
</html>