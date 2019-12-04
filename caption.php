<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Project2 - Caption</title>
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
					<h1>Caption</h1>
				</div>
				<div id="comic">
					<img src="images/caption.jpg" id="comicimage" alt="comic1" />
					<p id="comictext">"Captions" are similar to speech bubbles but they specifically target the narrator. They are ususally placed up near the corner of the panel.</p>
				</div>
				<br>
				<button id="prev"> </button>
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
			document.getElementById("prev").onclick = function() {
			location.href = "gutter.php";
		}
	</script>
</body>
</html>