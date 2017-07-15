<?php

//echo "you have selected :".$selected_type;

  //echo "successful";
  require_once "vendor/autoload.php";
  use Twilio\Rest\Client;

if((empty($_POST['radio'])) || (empty($_POST['units'])) || (empty($_POST['time'])) || (empty($_POST['location']))){
  echo "enter all the credentials";
}
else{
  $selected_bloodtype=$_POST['radio'];
  //echo "you have selected :".$selected_type;
  $selected_bloodunits=$_POST['units'];
  $selected_time=$_POST['time'];
  $selected_location=$_POST['location'];

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "bloodbank";

  $id="1";
  $bankid="2423";
//  $bloodtype="O P";
  //$pass=$_POST["pwd"];

  //echo $user;
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $sql = "INSERT INTO bloodrequests VALUES ($id,$bankid,'$selected_bloodtype', $selected_bloodunits, $selected_time);";

  if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();



   // Step 2: set our AccountSid and AuthToken from https://twilio.com/console
   $AccountSid = "ACd74e2681571e8a95cae78c09ea35fd1a";
   $AuthToken = "ed7ce42d458d56ca172534e8c185b228";

   // Step 3: instantiate a new Twilio Rest Client
   $client = new Client($AccountSid, $AuthToken);

   // Step 4: make an array of people we know, to send them a message.
   // Feel free to change/add your own phone number and name here.
   $people = array(
       "+918008030261" => "harika",


   );

   // Step 5: Loop over all our friends. $number is a phone number above, and
   // $name is the name next to it
   foreach ($people as $number => $name) {

       $sms = $client->account->messages->create(

           // the number we are sending to - Any phone number
           $number,

           array(
               // Step 6: Change the 'From' number below to be a valid Twilio number
               // that you've purchased
               'from' => "+13603017784",

               'body' => "Hey we need you to kindly donate the blood at  ".$selected_location."   blood bank"
           )
       );

       // Display a confirmation message on the screen
       echo "Sent message to $name";
   }

}
 ?>
