<?php 
session_start();
include_once("../dbconn.php");
?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>AirPal</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:100,300,400'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css'>

      <link rel="stylesheet" href="css/style.css">
      
      
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:100,300,400'>

      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/style2.css">

  
</head>

<body>

  <!--

Follow me on
Dribbble: https://dribbble.com/supahfunk
Twitter: https://twitter.com/supahfunk
Codepen: https://codepen.io/supah/

-->
<?php 
 $trans1=$_SESSION["Trans1"];
 $trans2=$_SESSION["Trans2"];
 $type=$_SESSION["Type"];
 $temp="OFF TO ".$trans2;
 $temp1="OFF TO ".$trans1;
 $to=$_SESSION["To"];
 $temp3="OFF TO ".$to;
 if(!isset($_POST['t1']) && !isset($_POST['t2']) && $type=="joint"){

  echo '
  <div class="onboard">               <!--from to trans1 -->
  
  </section>
  <div class="slider">
    <div class="item">
      <div class="ico">
        <center><img src="l1.png" align="middle"></center>
      </div>

      <div class="text">
        You have arrived at 
      </div>
      <div class="tit">';
        echo $_SESSION["From"]; echo ' Airport
      </div>
    </div>
    <div class="item">
      <div class="ico">
      <center><img src="ticket.png" align="middle"></center>
      
      </div>
      <div class="tit">
        Ticket Verification
      </div>
      <div class="text">
        Produce your ticket and ID proof at the entry.
      </div>
    </div>
    <div class="item">
      <div class="ico">
        <center><img src="t2.png" align="middle"></center>
      </div>
      <div class="tit">
        Getting your boarding pass
      </div>
      <div class="text">
        Produce your luggage and ticket to get your boarding pass <br> from the check-in counter.<br><br>
        Get Tags for your handbags.
      </div>
    </div>
    <div class="item">
      <div class="ico">
        <center><img src="sec.png" align="middle"></center>
      </div>
      <div class="tit">
       Security Check-In
      </div>
      <div class="text">
        You will be screened along with your handbags.<br> Produce your Passport and VISA.
      </div>
    </div>
    <div class="item">
      <div class="ico">
        <center><img src="departures.png" align="middle"></center>
      </div>
      <div class="tit">
        Boarding the plane
      </div>
      <div class="text">
        Find out the designated gate.<br> Provide your boarding pass and board the plane.
        
      </div>
    </div>
    <div class="item">
      
        
      
      <div class="text">
        
      </div>
      <div class="ico">
<center><img src="checked.png" align="middle"></center>
      </div>
      <form id="s1"  method="post" action="../6/index.php">
      <center><input name="s1" type="submit" class="cta" value="'; echo $temp3; echo '">'; echo ' </center> 
     </form>
    </div>
  </div>
</div> ';


 }
if(!isset($_POST['t1']) && !isset($_POST['t2']) && $type=="split"){
  echo '
<div class="onboard">               <!--from to trans1 -->
  
  </section>
  <div class="slider">
    <div class="item">
      <div class="ico">
        <center><img src="l1.png" align="middle"></center>
      </div>

      <div class="text">
        You have arrived at 
      </div>
      <div class="tit">';
        echo $_SESSION["From"]; echo ' Airport
      </div>
    </div>
    <div class="item">
      <div class="ico">
      <center><img src="ticket.png" align="middle"></center>
      
      </div>
      <div class="tit">
        Ticket Verification
      </div>
      <div class="text">
        Produce your ticket and ID proof at the entry.
      </div>
    </div>
    <div class="item">
      <div class="ico">
        <center><img src="t2.png" align="middle"></center>
      </div>
      <div class="tit">
        Getting your boarding pass
      </div>
      <div class="text">
        Produce your luggage and ticket to get your boarding pass <br> from the check-in counter.<br><br>
        Get Tags for your handbags.
      </div>
    </div>
    <div class="item">
      <div class="ico">
        <center><img src="sec.png" align="middle"></center>
      </div>
      <div class="tit">
       Security Check-In
      </div>
      <div class="text">
        You will be screened along with your handbags.<br> Produce your Passport and VISA.
      </div>
    </div>
    <div class="item">
      <div class="ico">
        <center><img src="departures.png" align="middle"></center>
      </div>
      <div class="tit">
        Boarding the plane
      </div>
      <div class="text">
        Find out the designated gate.<br> Provide your boarding pass and board the plane.
        
      </div>
    </div>
    <div class="item">
      
        
      
      <div class="text">
        
      </div>
      <div class="ico">
<center><img src="checked.png" align="middle"></center>
      </div>
      <form id="t1"  method="post" action="">
      <center><input name="t1" type="submit" class="cta" value="'; echo $temp1; echo '">'; echo ' </center> 

      
    </form>
    </div>
  </div>
</div> ';
} 
if(isset($_POST['t1']) && !isset($_POST['t2']) && $type=="split"){               
 
  echo '
  <div class="onboard">                      <!--trans1 to trans2-->
    
    </section>
    <div class="slider">
      <div class="item">
        <div class="ico">
          <center><img src="l1.png" align="middle"></center>
        </div>
  
        <div class="text">
          You have arrived at 
        </div>
        <div class="tit">';
          echo $trans1; echo ' Airport
        </div>
      </div>
      <div class="item">
        <div class="ico">
        <center><img src="exit.png" align="middle"></center>
        
        </div>
        <div class="tit">
          Exit Your Flight
        </div>
        <div class="text">
          Enter the '; echo $trans1; echo ' Airport and Find the check-in
        </div>
      </div>
      <div class="item">
        <div class="ico">
          <center><img src="t2.png" align="middle"></center>
        </div>
        <div class="tit">
          Getting your boarding pass
        </div>
        <div class="text">
          Produce your ticket to get your boarding pass <br> from the check-in counter.<br><br>
          Get Tags for your handbags.
        </div>
      </div>
      <div class="item">
        <div class="ico">
          <center><img src="sec.png" align="middle"></center>
        </div>
        <div class="tit">
         Security Check-In
        </div>
        <div class="text">
          You will be screened along with your handbags.
        </div>
      </div>
      <div class="item">
        <div class="ico">
          <center><img src="departures.png" align="middle"></center>
        </div>
        <div class="tit">
          Boarding the plane
        </div>
        <div class="text">
          Find out the designated gate.<br> Provide your boarding pass and board the plane.
          
        </div>
      </div>
      <div class="item">
        
          
        
        <div class="text">
          
        </div>
        <div class="ico">
  <center><img src="checked.png" align="middle"></center>
        </div>
        <form id="t2"  method="post" action="">
        <center><input name="t2" type="submit" class="cta" value="'; echo $temp; echo '">'; echo ' </center>
  
        
      </form>
      </div>
    </div>
  </div> ';

}

if(isset($_POST['t2']) && $type=="split" ){
 
  echo '
  <div class="onboard">                              <!--trans2 to to -->
    
    </section>
    <div class="slider">
      <div class="item">
        <div class="ico">
          <center><img src="l1.png" align="middle"></center>
        </div>
  
        <div class="text">
          You have arrived at 
        </div>
        <div class="tit">';
          echo $trans2; echo ' Airport
        </div>
      </div>
      <div class="item">
        <div class="ico">
        <center><img src="transit.png" height="150" align="middle"></center>
        
        </div>
        <div class="tit">
        <br/> Exit Your Flight and report Transit VISA 
        </div>
        <div class="text">
          Enter the '; echo $trans2; echo ' Airport and Find the Transfer Service desk.<br/>Produce your Transit VISA.
        </div>
      </div>
      <div class="item">
      <div class="ico">
        <center><img src="tourist.png" align="middle"></center>
      </div>
      <div class="tit"> Move to your terminal
      </div>
      <div class="text">
      Travel across to the terminal that hosts your plane.
      </div>
    </div>
      <div class="item">
        <div class="ico">
          <center><img src="t2.png" align="middle"></center>
        </div>
        <div class="tit">
          Getting your boarding pass
        </div>
        <div class="text">
          Produce your ticket to get your boarding pass <br> from the check-in counter.<br><br>
          Get Tags for your handbags.
        </div>
      </div>
      <div class="item">
        <div class="ico">
          <center><img src="sec.png" align="middle"></center>
        </div>
        <div class="tit">
         Security Check-In
        </div>
        <div class="text">
          You will be screened along with your handbags.
        </div>
      </div>
      <div class="item">
        <div class="ico">
          <center><img src="departures.png" align="middle"></center>
        </div>
        <div class="tit">
          Boarding the plane
        </div>
        <div class="text">
          Find out the designated gate.<br> Provide your boarding pass and board the plane.
          
        </div>
      </div>
      <div class="item">
        
          
        
        <div class="text">
          
        </div>
        <div class="ico">
  <center><img src="checked.png" align="middle"></center>
        </div>
        <form id="t3"  method="post" action="../6/index.php">
        <center><input name="t3" type="submit" class="cta" value="'; echo $temp3; echo '">'; echo ' </center>
  
        
      </form>
      </div>
    </div>
  </div> ';

}


?>


<svg xmlns="http://www.w3.org/2000/svg">
  <symbol id="share" width="130px" height="130px" viewBox="0 0 130 130" preserveAspectRatio="none">
    <g>
	<g>
		<g>
			<path fill="#F26B5C" d="M129.686,120.887l-9.111-19.738V49.641c0-3.612-2.938-6.549-6.549-6.549h-6.725V11.89
				c0-3.656-2.975-6.63-6.629-6.63H16.297c-3.655,0-6.63,2.975-6.63,6.63v52.855L0.315,85.01c-0.628,1.361-0.296,2.974,0.818,3.976
				c0.645,0.579,1.463,0.877,2.288,0.877c0.602,0,1.208-0.159,1.752-0.484l20.048-11.969v25.802c0,3.61,2.938,6.548,6.549,6.548
				h67.1l25.957,15.498c0.545,0.324,1.15,0.482,1.754,0.482c0.824,0,1.643-0.297,2.287-0.877
				C129.982,123.86,130.314,122.248,129.686,120.887z M101.564,103.403c-0.529-0.316-1.135-0.483-1.752-0.483H32.061V73.469h68.611
				c3.656,0,6.631-2.974,6.631-6.63V49.93h6.434v51.969c0,0.495,0.107,0.984,0.314,1.434l4.793,10.386L101.564,103.403z
				 M11.156,77.841l5.036-10.912c0.208-0.448,0.315-0.938,0.315-1.433V12.099h83.956V66.63H30.877c-0.618,0-1.223,0.167-1.752,0.483
				L11.156,77.841z"/>
			<path fill="#F26B5C" d="M27.554,31.487H90.49c1.889,0,3.42-1.531,3.42-3.419c0-1.889-1.531-3.42-3.42-3.42H27.554
				c-1.889,0-3.42,1.531-3.42,3.42C24.134,29.956,25.666,31.487,27.554,31.487z"/>
			<path fill="#F26B5C" d="M72.713,46.783c0-1.889-1.529-3.419-3.42-3.419H27.554c-1.889,0-3.42,1.531-3.42,3.419
				s1.531,3.42,3.42,3.42h41.739C71.184,50.203,72.713,48.672,72.713,46.783z"/>
		</g>
	</g>
</g>
<path opacity="0.3" fill="#F26B5C" d="M101.564,103.403c-0.529-0.316-1.135-0.483-1.752-0.483H32.061V73.469h68.611
	c3.656,0,6.631-2.974,6.631-6.63V49.93h6.434v51.969c0,0.495,0.107,0.984,0.314,1.434l4.793,10.386L101.564,103.403z"/>
<path fill="#F26B5C" d="M83.643,82.82H41.902c-1.888,0-3.42,1.531-3.42,3.42s1.532,3.42,3.42,3.42h41.741
	c1.889,0,3.418-1.531,3.418-3.42S85.531,82.82,83.643,82.82z"/>
  </symbol>
  
  <symbol id="read" width="130px" height="130px" viewBox="0 0 130 130" preserveAspectRatio="none">
    <g>
		<path fill="#F26B5C" d="M20.666,88.146c-0.215,0.909-0.059,1.867,0.433,2.662c0.491,0.794,1.278,1.361,2.188,1.576l88.041,20.771
			c0.272,0.063,0.544,0.095,0.812,0.095c1.598,0,3.044-1.094,3.427-2.715l14.341-60.783c0.214-0.909,0.059-1.867-0.433-2.662
			c-0.491-0.794-1.278-1.362-2.188-1.576L39.244,24.742c-0.908-0.214-1.867-0.059-2.662,0.433c-0.794,0.491-1.361,1.278-1.576,2.188
			L20.666,88.146z M40.014,36.829l9.637,14.321L34.568,59.91L40.014,36.829z M115.75,79.063l-9.576-14.578l15.021-8.503
			L115.75,79.063z M73.945,74.632L46.38,33.667l70.534,16.641L73.945,74.632z M28.334,86.334l4.006-16.98l21.254-12.345
			L69.92,81.271c0.677,1.006,1.788,1.557,2.926,1.557c0.59,0,1.186-0.148,1.732-0.457l25.449-14.406l13.495,20.542l-4.007,16.98
			L28.334,86.334z"/>
		<path fill="#F26B5C" d="M0,30.537c0,1.946,1.577,3.523,3.523,3.523H25.66c1.945,0,3.523-1.578,3.523-3.523
			s-1.577-3.523-3.523-3.523H3.523C1.577,27.014,0,28.591,0,30.537z"/>
		<path fill="#F26B5C" d="M3.721,48.482c0,1.946,1.577,3.523,3.523,3.523h14.695c1.946,0,3.523-1.578,3.523-3.523
			s-1.576-3.523-3.523-3.523H7.244C5.298,44.959,3.721,46.537,3.721,48.482z"/>
		<path fill="#F26B5C" d="M7.247,66.428c0,1.946,1.577,3.523,3.523,3.523h7.642c1.946,0,3.523-1.577,3.523-3.523
			c0-1.945-1.577-3.523-3.523-3.523h-7.642C8.824,62.905,7.247,64.482,7.247,66.428z"/>
	</g>
  </symbol>
  <symbol id="trophy" width="130px" height="130px" viewBox="0 0 130 130" preserveAspectRatio="none">
    <g>
	<g>
		<g>
			<path fill="#F26B5C" d="M129.038,12.351c-0.736-0.839-1.798-1.32-2.915-1.32h-18.032c0.083-2.146,0.071-3.504,0.067-3.792
				c-0.03-2.12-1.757-3.822-3.877-3.822H25.719c-2.12,0-3.847,1.703-3.876,3.822c-0.004,0.288-0.016,1.647,0.067,3.792H3.877
				c-1.116,0-2.178,0.481-2.914,1.32c-0.736,0.839-1.075,1.955-0.93,3.062c0.142,1.083,3.668,26.727,19.688,43.28
				c0.731,0.755,1.736,1.181,2.786,1.181h13.242c2.083,3.011,4.474,5.806,7.228,8.248l3.158,15.573
				c-2.53,2.466-4.105,5.907-4.105,9.711v0.429c0,3.211,1.123,6.162,2.993,8.487c-0.857,0.476-1.753,1.029-2.656,1.677
				c-4.271,3.054-9.473,8.742-10.007,18.497c-0.059,1.063,0.323,2.104,1.056,2.877s1.75,1.212,2.815,1.212h57.54
				c1.064,0,2.084-0.439,2.815-1.212c0.732-0.773,1.114-1.813,1.056-2.877c-0.535-9.755-5.736-15.443-10.007-18.497
				c-0.903-0.646-1.799-1.201-2.657-1.677c1.871-2.325,2.993-5.276,2.993-8.487v-0.429c0-3.804-1.575-7.245-4.105-9.711
				l3.157-15.573c2.755-2.443,5.145-5.237,7.229-8.248h13.242c1.051,0,2.055-0.426,2.785-1.181
				c16.02-16.553,19.547-42.197,19.688-43.28C130.113,14.305,129.773,13.19,129.038,12.351z M49.784,93.405
				c0-3.207,2.609-5.815,5.815-5.815h18.802c3.206,0,5.815,2.608,5.815,5.815v0.429c0,3.207-2.609,5.816-5.815,5.816H55.599
				c-3.207,0-5.815-2.609-5.815-5.816V93.405z M81.018,63.057c-0.684,0.565-1.152,1.348-1.329,2.217l-2.952,14.562H53.264
				l-2.952-14.562c-0.176-0.869-0.646-1.652-1.329-2.217C32.968,49.816,30.176,21.456,29.694,11.17h70.612
				C99.824,21.457,97.033,49.816,81.018,63.057z M24.191,52.12C14.44,41.29,10.146,26.156,8.54,18.784H22.46
				c0.919,9.027,3.191,21.897,8.773,33.335H24.191z M89.222,118.83H40.779c2.419-8.348,10.29-10.943,12.055-11.426h24.331
				C78.967,107.898,86.809,110.501,89.222,118.83z M105.81,52.12h-7.044c5.584-11.438,7.854-24.308,8.775-33.335h13.926
				C119.869,26.147,115.59,41.261,105.81,52.12z"/>
		</g>
	</g>
</g>
<path opacity="0.3" fill="#F26B5C" d="M81.018,63.057c-0.684,0.565-1.152,1.348-1.329,2.217l-2.952,14.562H53.264l-2.952-14.562
	c-0.176-0.869-0.646-1.652-1.329-2.217C32.968,49.816,30.176,21.456,29.694,11.17h70.612C99.824,21.457,97.033,49.816,81.018,63.057
	z"/>
  </symbol>
</svg>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js '></script>

  

    <script  src="js/index.js"></script>
     <script  src="js/index 2.js"></script>





</body>

</html>