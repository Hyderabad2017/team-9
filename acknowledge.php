<?php include 'includes/connect.php' ?>
<html>
<link rel="stylesheet" href="assets/css/styles.css">

<body style="color:#F8B149">
  <nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand navbar-link" href="#"><img src="assets/img/logo.jpg" id="logo"></a>
			</div>
		</div>
		</nav>
  <center>
<form name="fo1" method="post" action="acknowledge1.php ">
  <h1>Enter donor details</h1>
<h1>Enter donor name</h1>
  <input type="text" name="name" >
  <h1>Enter units of blood donated</h1>
  <input type="text" name="units" >

  <input type="submit" value="submit" >
</form>
</center>
</body>
</html>
