<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Project2 - Panels</title>
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
		
		<main>
			<div id="topcontainer" class="box2">
				<?php include('includes/navigation.php'); ?>
			</div>
			<br>
			<div class="box" id="maincontainer">
				<div id="title">
					<h1>Panels</h1>
				</div>
				<div id="comic">
					<img src="images/panel.png" width="300px" height="200px" id="comicimage" alt="comic1" />
					<p id="comictext">This small window on the page is known as a "panel" and is the fundamental building block for any comic strip. These little squares can come in all shapes and sizes and its main purpose move the story along by guiding the reader from one panel to the next. Panels can be used to exaggerate actions or to string a series of events together in a way the reader can easily understand. They also offer a wide variety of different styles to gie a bit more flavor to the overall concept of the comic.
					</p>
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
			location.href = "speechbubbles.php";
		}
		document.getElementById("prev").onclick = function() {
			location.href = "template.php";
		}
		function showDropdown() {
			document.getElementById("dropdownItems").classList.toggle("reveal");
		}
		function showDropdown2() {
			document.getElementById("dropdownItems2").classList.toggle("reveal");
		}
	
		window.onclick = function(event) {
			if (!event.target.matches('#clickDrop')) {
				var list = document.getElementsByClassName("dropdown-content");
				var i;
				for (i = 0; i < list.length; i++) {
					var open = list[i];
					if (open.classList.contains('reveal')) {
						open.classList.remove('reveal');
					}
				}
			}
		}
	</script>
</body>
</html>