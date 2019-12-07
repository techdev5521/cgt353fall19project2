<!DOCTYPE html>
<html lang="en-US">

	<head>
		<title>Project2 - Introduction</title>
		
		<!-- Meta and Link Data -->
		<?php include('includes/meta.php'); ?>
	</head>

	<body>

		<header>
			<!-- Include Header Content -->
			<?php include('includes/header.php'); ?>
		</header>

		<main>
			<br>
			<div id="topcontainer" class="box2">
				<?php include('includes/navigation.php'); ?>
			</div>
			<br>
			<div class="box" id="maincontainer">
				<div id="title">
					<h1>Introduction</h1>
				</div>
				<div id="comic">
					<img src="images/page1.png" id="comicimage" alt="comic1" />
					<p id="comictext"></p>
				</div>
				<br>
				<button id="hide"> </button>
				<img src="images/pagenumber0.png" alt="page number">
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
		</main>
		<script>
			function change() {
				document.getElementById("comicimage").src = "images/page1.2.png";
				document.getElementById('next').onclick = function() {change3()};
				document.getElementById("hide").id = "prev";
				document.getElementById('prev').onclick = function() {change2()};
			}
			function change2() {
				document.getElementById("comicimage").src = "images/page1.png";
				document.getElementById('next').onclick = function() {change()};
				document.getElementById("prev").id = "hide";
			}
			function change3() {
				document.getElementById("comicimage").src = "images/page1.3.png";
				document.getElementById('next').onclick = function() { location.href="page1.php"; };
				document.getElementById('prev').onclick = function() {change()};
			}
		</script>
	</body>
</html>