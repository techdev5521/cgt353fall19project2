<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Project2 - Step 2</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/styles.css" />
		<link href="https://fonts.googleapis.com/css?family=Poppins|Staatliches&display=swap" rel="stylesheet">
	</head>
	<body>
		<div id="header">
		<a href="index.php"><img src="images/sitename.png"  alt="website"/></a>
			<img src="images/ad.png" alt="advertisement"/>
		</div>
		<br>
		
		<div id="topcontainer" class="box2">
			<?php include('includes/navigation.php'); ?>
		</div>
		
		<br>
		<main>
			<div class="box" id="maincontainer">
				<div id="title">
					<h1>Step 2: Develop your setting and characters</h1>
				</div>
				<div id="comic">
					<img src="images/page 2.png" id="comicimage" alt="comic" />
				</div>
				<br>
				<button id="prev" onclick="change0()"></button>
				<img src="images/pagenumber2.png" alt="page number">
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
				location.href="page1.php" ;
			}
			function change() {
				document.getElementById("comicimage").src = "images/page 2.1.png";
				document.getElementById('next').onclick = function() {change3()};
				document.getElementById('prev').onclick = function() {change2()};
			}
			function change2() {
				document.getElementById("comicimage").src = "images/page 2.png";
				document.getElementById('next').onclick = function() {change()};
				document.getElementById('prev').onclick = function() {change0()};
			}
			function change3() {
				document.getElementById("comicimage").src = "images/page 2.2.png";
				document.getElementById('next').onclick = function() { location.href="page3.php"; };
				document.getElementById('prev').onclick = function() {change()};
			}
		</script>
	</body>
</html>