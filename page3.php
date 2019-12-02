<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Project2 - Step 3 Pt.1</title>
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
					<h1>Step 3: Planning out your comic</h1>
				</div>
				<div id="comic">
					<img src="images/page 3.png" id="comicimage" alt="comic" />
					<p></p>
				</div>
				<br>
				<button id="prev" onclick="change0()"></button>
				<img src="images/pagenumber3.PNG" alt="page number">
				<button id="next" onclick="change()"></button>
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
		</main>
		<script>
			function change0() {
				location.href="page2.html" ;
			}
			function change() {
				document.getElementById("comicimage").src = "images/page 3.1.png";
				document.getElementById('next').onclick = function() {change3()};
				document.getElementById('prev').onclick = function() {change2()};
			}
			function change2() {
				document.getElementById("comicimage").src = "images/page 3.png";
				document.getElementById('next').onclick = function() {change()};
				document.getElementById('prev').onclick = function() {change0()};
			}
			function change3() {
				document.getElementById("comicimage").src = "images/page 3.2.png";
				document.getElementById('next').onclick = function() { location.href="page4.html"; };
				document.getElementById('prev').onclick = function() {change()};
			}
		</script>
	</body>
</html>