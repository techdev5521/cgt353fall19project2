<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Project2 - Step 4</title>

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
					<h1>Step 4: Do a test run</h1>
				</div>
				<div id="comic">
					<img src="images/page4.png" id="comicimage" alt="comic" />
					<p></p>
				</div>
				<button id="prev" onclick="change0()"></button>
				<img src="images/pagenumber4.png" alt="page number">
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
				location.href="page3.php" ;
			}
			
			function change2() {
				document.getElementById("comicimage").src = "images/page4.png";
				document.getElementById('next').onclick = function() {change()};
				document.getElementById('prev').onclick = function() {change0()};
			}
			function change() {
				document.getElementById("comicimage").src = "images/page4.1.png";
				document.getElementById('next').onclick = function() { location.href="page5.php"; };
				document.getElementById('prev').onclick = function() {change2()};
			}
		</script>
	</body>
</html>