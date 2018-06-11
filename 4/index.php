<?php 

session_start();
include_once("../dbconn.php");
$_SESSION["From"]=$_POST["from1"];
$_SESSION["To"]=$_POST["to1"];
$_SESSION["Trans1"]=$_POST["trans1"];
$_SESSION["Trans2"]=$_POST["trans2"];
$_SESSION["Type"]=$_POST["type"];


?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>AirPal</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>


<!-- / Begin Body -->
<div class='swanky'>
  <!-- / Introduction Block -->
  <div class='swanky_title'>
      <div class='swanky_title__social'>
      <a href='../5/index.php'>
        <div class='slide'>
          <div class='arrow'>
            <div class='stem'></div>
            <div class='point'></div>
          </div>
        </div>
        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CONTINUE
      </a>
    </div>
    
  </div>
  <!-- /////////// Begin Dropdown //////////// -->
  <div class='swanky_wrapper'>
    <input id='Dashboard' name='radio' type='radio'>
    <label for='Dashboard'>
      
      <span>DOCUMENTS</span>
      <div class='lil_arrow'></div>
      <div class='bar'></div>
      <div class='swanky_wrapper__content'>
        <ul>
        <li>Passport</li>
        <li>VISA</li>
        <li>Flight Ticket</li>
        <li>Transit VISA </li>
        <li>Boarding Pass</li>
        <li>Travel insurance(Optional)</li>
           
          
                        
        </ul>
      </div>
    </label>
    
  </div>
  <!-- /////////// End Dropdown //////////// -->
</div>
<!-- / My Footer -->

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>
