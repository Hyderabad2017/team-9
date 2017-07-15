<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bloodbankrequest</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">

    <script language="javascript">
          function validate(){
            document.alert("entered");
            var bt=document.getElementsByName('radio').value;
            var bu=document.getElementsByName('units').value;
            var loc=document.getElementsByName('location').value;
            if((bt=="") || (bu=="") || (loc=="")){
              alert("enter all the details");
            }
          }
        </script>
</head>

<body>
  <form name="f1" method="post" action="check.php">
    <h1 class="text-center">Enter the requirements</h1>
    <h1>Choose the blood type</h1>
    <div class="radio">
        <label>
            <input type="radio" name="radio">A Negative</label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="radio">A Positive</label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="radio">O Negative</label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="radio">O Positive</label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="radio">B Negative</label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="radio">B Positive</label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="radio">AB Negative</label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="radio">AB Positive</label>
    </div>
    <h1>Enter Units of Blood required</h1>

    <input type="text" name="units" >
    <h1>Enter time frame in hours</h1>
    <input type="text" name="time" >
    <h1>Enter Location</h1>
    <input type="text" name="location">
    <input type="submit" value="submit" >
</form>




    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>