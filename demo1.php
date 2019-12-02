<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Project2 - Demonstration</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/styles.css" />
		<link href="https://fonts.googleapis.com/css?family=Poppins|Staatliches&display=swap" rel="stylesheet">
	</head>
	<body>
		<div id="header">
			<img src="images/sitename.PNG"  alt="website"/>
			<img src="images/ad.PNG" alt="advertisement"/>
		</div>
		<br>
		
		<div id="topcontainer" class="box2">
			<?php include('includes/navigation.php'); ?>
		</div>
		
		<br>
		<main>
			<div class="box" id="maincontainer">
				<div id="title">
					<h1>Demonstraition</h1>
				</div>
				<div id="comic">
					<img src="images/comic example.png" id="comicimage" alt="comic1" />
					<p id="comictext">When it comes to making a comic or web comic of any kind, it is important to know what tools you have at your disposal. Comics come in many shapes and sizes and utilize many different techniques to make static pages feel more dynamic and conversational. Within this chapter we will look into the many assets that make up a comic and how you can use them to create your own!</p>
				</div>
				<br>
				<button id="prev"> </button>
				<img src="images/pagenumber0.PNG" alt="page number">
				<button id="next" onclick="change()"> </button>
				<br>
				<br>
			</div>
			<br>
			<div id="bottomcontainer" class="box3">
				<div class="box4">
					<h1>Website Created By:</h1>
					<br>
					<h1>Ian Coffman</h1>
					<h1>Josh Heller</h1>
					<h1>Justin Campbell</h1>
				</div>
			</div>
			
		</div>
		
	</main>
	<script>
		document.getElementById("next").onclick = function() {
			location.href = "template.html";
		}
	</script>
</body>
</html>