<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Project2 - Caption</title>

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

			<footer id="bottomcontainer" class="box3">
				<!-- Include Footer Information -->
				<?php include('includes/footer.php'); ?>
			</footer>
			
			
		</div>
	</main>
	<script>
			document.getElementById("prev").onclick = function() {
			location.href = "gutter.php";
		}
	</script>
</body>
</html>