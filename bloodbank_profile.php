<?php include 'includes/connect.php' ?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank Request</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">


</head>

<body>
  <nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand navbar-link" href="#"><img src="assets/img/logo.jpg" id="logo"></a>
			</div>
		</div>
		</nav>

    <h1 class="text-center">Choose your activity</h1>

    <form name="f1" method="post" action="request_blood.php">

    <input type="submit"  class="btn btn-lg" value="Request for blood" style="padding:4em; background-color:#004D95" >
  </form><br><br>
  <form name="f2" method="post" action="acknowledge.php">

    <input type="submit" class="btn btn-lg" style="padding:4em; background-color:#F8B149;" value="Enter donor details" >
</form>



    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
