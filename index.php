<?php

require 'includes/connect.php';

 //Declaring variables to prevent error

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">

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
				<link rel="stylesheet" href="r/css/style.css">



    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">



</head>
  <?php include 'includes/header.php'; ?>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand navbar-link" href="#"><img src="assets/img/logo.jpg" id="logo"></a>
			</div>
		</div>
		</nav>
	<img src="assets/img/img1.jpg" id="img1"><br><br>
  <div id="content">
            <div class="container-fluid decor_bg" id="login-panel">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-primary" >
                            <div class="panel-heading">
                                <h4>LOGIN TO UNITED HYDERABAD</h4>
                            </div>
                            <div class="panel-body">
                                <form action="login_submit.php" method="POST">

														<form>
														  <h4> Login Information </h4>
															<div class="form-group">
																	<input type="email" class="form-control"  placeholder="Enter Email" name="email" required = "true">
															</div>
															<input type="password" class="form-control" placeholder="Enter Password" name="password" required = "true">
																<br><br><br>

																<div id="radio">
																		<label id="test" class="radio radio"><input type="radio" name="usertype"value="donor">Donor </label>
																		 <label id="test" class="radio radio"><input type="radio" name="usertype" value="bloodbank">Blood Bank </label>
																			<label id="test" class="radio radio"><input type="radio" name="usertype" value="admin">Admin </label>
																</div>


															<button type="submit" name="submit" class="btn btn-primary">Login</button><br><br>
														</form>
                                    <?php echo $_GET['error']; ?>
                                </form><br/>
                            </div>
                            <div class="panel-footer"><p>Don't have an account? <a href="signup.php" style="color=#004D95">Register</a></p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




</body>

</html>



		</div>
            <?php include 'includes/footer.php'; ?>
	</body>

</html>
