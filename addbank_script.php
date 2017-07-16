<?php

require("includes/connect.php");

  // Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
  $orgname = $_POST['orgname'];


  $email = $_POST['email'];


  $password = $_POST['password'];

  $password = MD5($password);

  $contact = $_POST['contact'];


  

  $location = $_POST['location'];

  

  $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
  $regex_num = "/^[789][0-9]{9}$/";

  $query = "SELECT * FROM bloodbank_info WHERE email='$email'";
  $result = mysqli_query($con, $query)or die($mysqli_error($con));
  $num = mysqli_num_rows($result);
  
  if ($num != 0) {
    $m = "<span class='red'>Email Already Exists</span>";
  //  header('location: signup.php?m1=' . $m);
  } else if (!preg_match($regex_email, $email)) {
   $m = "<span class='red'>Not a valid Email Id</span>";
   header('location: signup.php?m1=' . $m);
  }
  else if (!preg_match($regex_num, $contact)) {
    $m = "<span class='red'>Not a valid phone number</span>";
    //header('location: signup.php?m2=' . $m);
  } else { 
    
    $query = "INSERT INTO bank_info VALUES('','" . $orgname . "','" . $location . "','" . $email . "','" . $password . "','" . $contact . "')";
  //  echo $query;
    mysqli_query($con, $query) or die(mysqli_error($con));
   $user_id = mysqli_insert_id($con);
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;
  header('location: admin_profile.php'); }
  
?>
