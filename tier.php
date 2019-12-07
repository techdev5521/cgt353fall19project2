<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Project2 - Tiers</title>

		<!-- Meta and Link Data -->
		<?php include('includes/meta.php'); ?>
	</head>

	<body>

		<header>
			<!-- Include Header Content -->
			<?php include('includes/header.php'); ?>

			<!-- Include Navigation Content -->
			<?php include('includes/navigation.php'); ?>
		</header>

		<main>

			<div class="box" id="maincontainer">
				<div id="title">
					<h1>Tiers</h1>
				</div>
				<div id="comic">
					<img src="images/tier.jpg" width="300px" height="200px" id="comicimage" alt="comic1" />
					<p id="comictext">A "Tier" is a term used to describe a series of panels that share the same line. This is mainly used for organization purposes to help you kep track of your elements on the page. This can also be used to set up sequence shots for your comic or a dramatic change in movement or expression. Many possiblities lie within tiers so be sure to experiment with them</p>
				</div>
				<br>
				<button id="prev"> </button>

				<button id="next" onclick="change()"> </button>
				<br>
				<br>
			</div>
			<br>

			<footer id="bottomcontainer" class="box3">
				<!-- Include Footer Information -->
				<?php include('includes/footer.php'); ?>
			</footer>
			
			
		</div>
		
	</main>
	<script>
		
		document.getElementById("next").onclick = function() {
			location.href = "splash.php";
		}
			document.getElementById("prev").onclick = function() {
			location.href = "speechbubbles.php";
	/*
			function change() {
				{
							document.getElementById("comicimage").src = "css/comic1.jpeg";
							document.getElementById('comictext').innerHTML = "This is a test";
							document.getElementById('next').onclick = function() { location.href="page1pt.1.php"; };
							document.getElementById('prev').onclick = "change2()";
							}
		}
		function change2() {
				{
							document.getElementById("comicimage").src = "css/images/comic example.png";
							document.getElementById('comictext').innerHTML = "This is also a test";
							document.getElementById('next').onclick = "change()";
	*/
		}
	</script>
	<footer>
	</footer>
</body>
</html>