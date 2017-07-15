<?php

require("includes/connect.php");

$usertype=$_POST['usertype'];
if($usertype=="buyer"){

$username= $_POST['username'];
$username = mysqli_real_escape_string($con, $username);
$password = $_POST['password'];
$password = mysqli_real_escape_string($con, $password);

$password = MD5($password);


// Query checks if the email and password are present in the database.
$query = "SELECT * FROM buyer_users WHERE username='" . $username . "' AND password='" . $password . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);

// If the email and password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.
if ($num == 0) {
  $error = "<span class='red'>Please enter correct E-mail id and Password</span>";
  header('location: index.php?error=' . $error);
} else {  
  $row = mysqli_fetch_array($result);
  $_SESSION['buyer_user_name'] = $row['username'];
  $_SESSION['buyerid'] = $row['buyerid'];
  header('location: home1.php');
}}

else if($usertype=="seller"){

$username= $_POST['username'];
$username = mysqli_real_escape_string($con, $username);
$password = $_POST['password'];
$password = mysqli_real_escape_string($con, $password);

$password = MD5($password);


// Query checks if the email and password are present in the database.
$query = "SELECT * FROM users WHERE username='" . $username . "' AND password='" . $password . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);

// If the email and password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.
if ($num == 0) {
  $error = "<span class='red'>Please enter correct E-mail id and Password</span>";
  header('location: index.php?error=' . $error);
} else {  
  $row = mysqli_fetch_array($result);
  $_SESSION['user_name'] = $row['username'];
  $_SESSION['sellerid'] = $row['id'];
  header('location: home1.php');
}}