<?php
ob_start(); //Turns on output buffering
session_start();

$timezone = date_default_timezone_set("Asia/Kolkata");
 $con = mysqli_connect("13.229.53.212","root","root","bloodbank",3306);  //connection variable

 if(mysqli_connect_errno())
 {
 	echo "Failed to connect ".mysqli_connect_errno();
 }
 ?>