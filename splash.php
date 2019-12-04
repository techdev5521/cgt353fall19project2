<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Project2 - Splashes and Spreads</title>
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
					<h1>Splashes and Spreads</h1>
				</div>
				<div id="comic">
					<img src="images/splash.jpg" width="300px" height="200px" id="comicimage" alt="comic1" />
					<p id="comictext">A "Splash" is a term used to describe how an image takes up the entire page, and a "Spread" takes up more than one page. These are used for big important action shots, grand appearances, or just large referenceing shots that work better if it takes up the whole page or multiple). With that much room at your disposal, it can get kind of overwhelming trying to fill in the whole space, but really think about blocking everything out first so you can see if putting certain objects or characters in those locations give the shot more unity.</p>
				</div>
				<br>
				<button id="prev"> </button>

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
			location.href = "gutter.php";
		}
			document.getElementById("prev").onclick = function() {
			location.href = "tier.php";
		}
	</script>
</body>
</html>