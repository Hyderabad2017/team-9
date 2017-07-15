<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">



</head>

<body>

  <?php
  define('DB_HOST', 'localhost');
  define('DB_NAME', 'test');
  define('DB_USER','root');
  define('DB_PASSWORD','');

  $con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
  $db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
  /*
  $ID = $_POST['user'];
  $Password = $_POST['pass'];
  */
  function SignIn()
  {
  session_start();   //starting the session for user profile page
  if(!empty($_POST['uname']))   //checking the 'user' name which is from Sign-In.html, is it empty or have some text
  {
  	$query = mysql_query("SELECT *  FROM login where uname = '$_POST[uname]' AND password = '$_POST[password]'") or die(mysql_error());
  	$row = mysql_fetch_array($query) or die(mysql_error());
  	if(!empty($row['uname']) AND !empty($row['password']))
  	{
  		$_SESSION['uname'] = $row['Password'];
  		echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE...";

  	}
  	else
  	{
  		echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
  	}
  }
  }
  if(isset($_POST['submit']))
  {
  	SignIn();
  }

  ?>


    <div class="login-card"><img src="assets/img/avatar_2x.png" class="profile-img-card">
        <p class="profile-name-card"> </p>
        <form class="form-signin"><span class="reauth-email"> </span>
            <input class="form-control" name="uname" type="email" required="" placeholder="Email address" autofocus="" id="inputEmail">
            <input class="form-control" name="password" type="password" required="" placeholder="Password" id="inputPassword">
            <div class="checkbox">
                <div class="checkbox">
                    <label>
                        <input type="checkbox">Remember me</label>
                </div>
            </div>
            <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit">Sign in</button>
        </form><a href="#" class="forgot-password">Forgot your password?</a></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>




</body>

</html>
