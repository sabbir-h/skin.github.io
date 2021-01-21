<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet"  href="css/style.css?v=<?php echo time(); ?>">
	<script type="text/javascript" src="detection.js"> </script>
	<title> Skin Deasis </title>
</head>
<body>
	<header>
		<ul id="hl">
			<li class="hb"><a href ="#" >Home</a></li>
			<li class="hb"><a href ="#" > About Us</a></li>
			<li class="hb"><a href ="#" >Profile </a></li>
			<li class="hb"><a href ="http://localhost/project/SingOut.php" >Sing Out</a><li>
		</ul>
	</header>
  
	<h1  id="a"> Welcome To Our Site </h1>
	<p id="b">Detect Your Disease Here </p>
	<p id="c">Fill up the form </p>
<form id="f">
	<ol>
		<li>What's the color of your mole? </br>
			<label><input type="checkbox" name="q1" id="brown"> brown</label>
			<label><input type="checkbox" name="q1" id="black"> black</label>
			<label><input type="checkbox" name="q1" id="mixed"> mixed</label>
			<label><input type="checkbox" name="q1" id="unevenly"> unevenly distributed</label>
			<br><br>
		</li>
		<li>Conditions of the border of moles-</br>
			<label><input type="checkbox" name="q2" id="oar">oval or round </label>
			<label><input type="checkbox" name="q2" id="irreguler">irreguler</label>
			<label><input type="checkbox" name="q2" id="notched"> notched</label>
			<br><br>
		</li>
		<li>Size of moles-</br>
			<label><input type="radio" name="q3" id="smaller">smaller than 1/4 inch</label>
			<label><input type="radio" name="q3" id="larger"> larger than 1/4 inch</label>
			<br><br>
		</li>
		<li>Is it changing shape or color?</br>
			<label><input type="radio" name="q4" id="y"> Yes</label>
			<label><input type="radio" name="q4" id="n">No</label>
		</li>
	</ol>
</form>
</b></b></b>

	<form action="" method="post" enctype="multipart/form-data">
		<p id="d"> Upload Your Image: 
		<input type="file" name="image" id="fileToUpload">
		<!-- <input class="up" type="submit" value="Upload Image" name="upload"></p> -->
	</form>
	<button id="btn" onclick="detect()" > Submit </button>
	</b></b>
	<p id="result"> Result: <span id="rslt"></span></p>
</body>
</html>
