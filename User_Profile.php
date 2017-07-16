<?php include 'includes/connect.php' ?>
<?php

if(isset($_POST['sub'])){
	//$error_msg = array();
        $q0=$_POST['optradio'];
        $q1=$_POST['optradio1'];
        $q2=$_POST['optradio2'];
        $q3=$_POST['optradio3'];
        $q4=$_POST['optradio4'];
        $q5=$_POST['optradio5'];
     
           
	if(($q0=="no")||($q1=="no")||($q2=="no")||($q3=="no")||($q4=="no")||($q5=="no")){
		 echo "<h2><center>You are not eligible to donate blood.</center></h2>";
	}
	
	else if(($q0=="yes")&&($q1=="yes")&&($q2=="yes")&&($q3=="yes")&&($q4=="yes")&&($q5=="yes")){
           echo "<script> location.href='displayEvents.php'; </script>";
           
            
        }
	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <style>
.form-actions {
    margin: 0;
    
    text-align: center;
}

</style>
</head>

<body>
    <?php include 'includes/header1.php'; ?>
 <form action="User_profile.php" method="post">
     <br>
     <br>
     <br>
     <br>
<div class="container">
    
    <h1><center>Enter Donor Information</center></h1>
  
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">Is your age between 18-60 years?</div>
      <div class="panel-body">
      <label class="radio-inline">
      <input type="radio" name="optradio" value="yes">YES
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="no">NO
    </label></div>
    </div>

    <div class="panel panel-primary">
      <div class="panel-heading">Is your weight 45 kgs OR more?</div>
      <div class="panel-body"> 
      <label class="radio-inline">
      <input type="radio" name="optradio1" value="yes">YES
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio1" value="no">NO
    </label></div>
    </div>

    <div class="panel panel-success">
      <div class="panel-heading">Was your last blood donation 3 or more months earlier?</div>
      <div class="panel-body">
      <label class="radio-inline">
      <input type="radio" name="optradio2" value="yes">YES
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio2" value="no">NO
    </label></div>
    </div>

    <div class="panel panel-info">
      <div class="panel-heading">You have not suffered from diseases in the recent past(Malaria,Typhoid or other transmittable diseases)</div>
      <div class="panel-body">
      <label class="radio-inline">
      <input type="radio" name="optradio3" value="yes">YES
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio3" value="no">NO
    </label></div>
    </div>

    <div class="panel panel-warning">
      <div class="panel-heading">Had NO fainting attacks during last donation?</div>
      <div class="panel-body">
      <label class="radio-inline">
      <input type="radio" name="optradio4" value="yes">YES
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio4" value="no">NO
    </label></div>
    </div>

    <div class="panel panel-danger">
      <div class="panel-heading">Had NO major surgery in the last 6 months?</div>
      <div class="panel-body">
      <label class="radio-inline">
      <input type="radio" name="optradio5" value="yes">YES
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio5" value="no">NO
    </label></div>
    </div>
	<div class="form-actions">
    <input type="submit" name="sub" id="sub" class="btn" value="Donate Blood">
</div>

  </div>
</div>
</form>
    <div class="container container-fluid">
        <div class="well">
            <center> <a href="note.php" > <button type="submit" class="btn btn-lg btn-info" name="view" id="view" class="btn" > View Events</button></a></center>
</div>
    </div>
     <?php include 'includes/footer.php'; ?>

</body>
</html>