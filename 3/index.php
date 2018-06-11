<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Airpal</title>

      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/temp.css">
      <script type="text/javascript">
      	
      
      function main() {
      	var Input = document.getElementById('sel');
      	
      	if(Input.value=="joint"){
      		document.getElementById("logo").style.display="";
      		document.getElementById("transit").style.visibility="hidden";
      		document.getElementById("trans1").style.visibility="hidden";
      		document.getElementById("trans2").style.visibility="hidden";
      	}
      	if(Input.value=="split"){
      		document.getElementById("logo").style.display="none";
      		document.getElementById("transit").style.visibility="visible";
      	}
      
      }
      function val(){
      	var Box=document.getElementById("transit");
      	//Box.addEventListener('keydown',function(){
      		if(Box.value=="1"){
      		document.getElementById("trans1").style.visibility="visible";
      		document.getElementById("trans2").style.visibility="hidden";
      	}
      	if(Box.value=="2"){
      		document.getElementById("trans2").style.visibility="visible";
      		document.getElementById("trans1").style.visibility="visible";
      	}
      	
      	
      }
	

      	
      
      	
      </script>
<style>
#logo{
	position: absolute;
	left:41%;
	top: 55%;
	z-index: -1;


}
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;

    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
    width: 100%;

}

div {
	position: relative;
	left:360px;
	top:125px;
	width: 50%;
    border-radius: 25px;
    background-color: #000;
    padding: 20px;
    opacity:0.5;
}

</style>
  
</head>

<body >
<div class="w3-container w3-center w3-animate-opacity">
  <form method="post" action="..\4\index.php">
    <label for="from">From</label>
    <input type="text" id="from" name="from1" placeholder="Source of travel">

    <label for="to">To</label>
    <input type="text" id="to" name="to1" placeholder="Destination">
    <label for="type">TYPE</label>
    <select id="sel" name="type" onchange="main()">
      <option value="select">Select</option>
      <option value="joint">Single</option>
      <option value="split">Multiple</option>
    </select>
    <input id="transit" type="text" name="hid" placeholder="Transit count" onkeyup="val()">
    <script type="text/javascript">

      	document.getElementById("transit").style.visibility="hidden";
      </script>
<img id="logo" src="icon.png" width="120" height="150">

    
    <input type="text" id="trans1" name="trans1" placeholder="Transit 1">

    
    <input type="text" id="trans2" name="trans2" placeholder="Transit 2">

    <script type="text/javascript">

      	document.getElementById("trans1").style.visibility="hidden";
      	document.getElementById("trans2").style.visibility="hidden";
      	

      </script>

    
    <input type="submit" value="Submit">
  </form>
</div>


  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

</body>

</html>
