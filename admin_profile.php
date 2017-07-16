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

        <?php include 'includes/header1.php'; ?>

        <div class="container-fluid decor_bg" id="content">

            <div class="row">

                <div class="container">

                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">

                        <h2>Add BloodBank Info</h2>

                        <form  action="addbank_script.php" method="POST">

                            <div class="form-group">

                                <input class="form-control" placeholder="Organization Name" name="orgname"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">

                            </div>
							<div class="form-group">

                                <input class="form-control" placeholder="Location" name="location"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">

                            </div>

                            
                            <div class="form-group">

                                <input type="text" class="form-control"  placeholder="Contact" maxlength="10" size="10" name="contact" required = "true"><?php echo $_GET['m2']; ?>

                            </div>
                             <div class="form-group">

                                <input type="text" class="form-control"  placeholder="Email" name="email" required = "true">

                            </div>
							 <div class="form-group">

                                <input type="password" class="form-control"  placeholder="PASSWORD" name="password" required = "true">

                            </div>
							
							

                          

                            

                            <center> <button type="submit" name="REGISTER BLOOD BANK" class="btn btn-primary">REGISTER BLOOD BANK</button></center>

                        </form>

                    </div>

                </div>

            </div>

        </div>
        <div id="container container-fluid">
            <a href="adminportal.php"> <center><button type="submit" btn="btn btn-lg btn-info" name="REGISTER BLOOD BANK" class="btn btn-primary">Show Inventory</button></center></a>
        </div>
       

        <?php include "includes/footer.php"; ?>

    </body>

</html>