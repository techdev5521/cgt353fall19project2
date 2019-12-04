<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Project2 - Speech Bubbles</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/styles.css" />
		<link href="https://fonts.googleapis.com/css?family=Poppins|Staatliches&display=swap" rel="stylesheet">
	</head>
	<body>
		<div id="header">
		<a href="index.php"><img src="images/sitename.png"  alt="website"/></a>
			<img src="images/product.png" alt="product"/>
		</div>
		<br>
		
		<div id="topcontainer" class="box2">
			<?php include('includes/navigation.php'); ?>
		</div>
		
		<br>
		<main>
			<div class="box" id="maincontainer">
				<div id="title">
					<h1>Speech Bubbles</h1>
				</div>
				<div id="comic">
					<label>
						<textarea name="message" id="message"></textarea>
					</label><br>
					<p id="comictext">"Speech Bubbles" are pretty self explainatory, they are small sections of text that indicate speech coming from a particular character in the panel. The person talking is indicated by where the tail meets the mouth of the talking character. An important rule of thumb for speech bubbles is to position them how you would read a book, make sure the speech bubble of whoever is talking first is placed near the top of the page and placed slightly to the left if there is a converstaion. Any other bubbles should follow below the previous ones, and make sure to have all connections between the bubbles apparent to the reader. Speech bubbles can also be used to emphasize tone of voice by using different designs for them, so pick whichever one fits the situation best!</p>
					<br />
					<p>Click on the bubble to type a message to have the character speak!</p>
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
	</div>
	
</main>
<script>
	document.getElementById("next").onclick = function() {
		location.href = "tier.php";
	}
		document.getElementById("prev").onclick = function() {
		location.href = "panels.php";
	}
</script>
</body>
</html>