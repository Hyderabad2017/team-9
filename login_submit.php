<?php

require("includes/connect.php");
$usertype=$_POST['usertype'];

$email = $_POST['e-mail'];
$email = mysqli_real_escape_string($con, $email);
$password = $_POST['password'];
$password = mysqli_real_escape_string($con, $password);

$password = MD5($password);

if($usertype=="donor"){
// Query checks if the email and password are present in the database.
$query = "SELECT * FROM donor_login WHERE email='" . $email . "' AND password='" . $password . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);
//echo $num;
//echo $usertype;


//If the email and password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.
if ($num == 0) {
  $error = "<span class='red'>Please enter correct E-mail id and Password</span>";
  header('location: index.php?error=' . $error);
} else {  
  $row = mysqli_fetch_array($result);
  $_SESSION['email'] = $row['email'];

  header('location: User_profile.php');
}
}
if($usertype=="admin"){
// Query checks if the email and password are present in the database.
$query = "SELECT * FROM admin_login WHERE email='" . $email . "' AND password='" . $password . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);

$_SESSION['email'] = $row['email'];
if ($num == 0) {
  $error = "<span class='red'>Please enter correct E-mail id and Password</span>";
  header('location: index.php?error=' . $error);
} else {  
  $row = mysqli_fetch_array($result);
  $_SESSION['email'] = $row['email'];

 
}

header('location: admin_profile.php');
}
if($usertype=="bloodbank"){
// Query checks if the email and password are present in the database.
$query = "SELECT * FROM bank_info WHERE email='" . $email . "' AND password='" . $password . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);
$_SESSION['email'] = $row['email'];

header('location: bloodbank_profile.php');
if ($num == 0) {
  $error = "<span class='red'>Please enter correct E-mail id and Password</span>";
  header('location: index.php?error=' . $error);
} else {  
  $row = mysqli_fetch_array($result);
  $_SESSION['email'] = $row['email'];

  
}
}





