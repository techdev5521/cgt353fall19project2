<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Project2 - Splashes and Spreads</title>

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
					<h1>Splashes and Spreads</h1>
				</div>

				<div id="comic">
					<img src="images/splash.jpg" width="300px" height="200px" id="comicimage" alt="comic1" />
					<p id="comictext">A "Splash" is a term used to describe how an image takes up the entire page, and a "Spread" takes up more than one page. These are used for big important action shots, grand appearances, or just large referenceing shots that work better if it takes up the whole page or multiple). With that much room at your disposal, it can get kind of overwhelming trying to fill in the whole space, but really think about blocking everything out first so you can see if putting certain objects or characters in those locations give the shot more unity.</p>
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
			location.href = "gutter.php";
		}
			document.getElementById("prev").onclick = function() {
			location.href = "tier.php";
		}
	</script>


	
</html>