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

				<button id="prev"> </button>
				<button id="next" onclick="change()"> </button>

			</div>
		
		</main>

		<footer id="bottomcontainer" class="box3">
			<!-- Include Footer Information -->
			<?php include('includes/footer.php'); ?>
		</footer>

	</body>



	<script>
		document.getElementById("next").onclick = function() {
			location.href = "splash.php";
		}
			document.getElementById("prev").onclick = function() {
			location.href = "speechbubbles.php";
		}
	</script>


	
</html>