<?php 
session_start();
include_once("../dbconn.php");
$dest=$_SESSION["To"];
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>AirPal</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>
<br>
<a href="../index.php"><img src="img/icon.png" style="width:80px;height:90px;" align="right" hspace="30" ></a>
<body>

  <div id="myPageContent" class="container-fluid">
<section id="home">
	
	

	
<div id="textSlider" class="row">
					<div class="col-xs-12 col-sm-12 col-md-7 col-lg-8 slideCol">
						<div class="scroller">
							<div class="inner">
								<p>YOU HAVE REACHED</p>
								<p><?php echo $dest ?></p>
							</div>
						</div>
					</div>
	
				</div>
	
	
	
	
	
</section
</div>
  
  

</body>

</html>
