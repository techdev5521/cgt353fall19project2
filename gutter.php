<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Project2 - Gutter</title>

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
					<h1>Gutter</h1>
				</div>

				<div id="comic">
					<img src="images/gutter.jfif"  id="comicimage" alt="comic1" />
					<p id="comictext">The "Gutter" os the space between panels. They come in many sizes and can generally effect how easy it is to read certain panels.</p>
					<br />
				</div>

				<button id="prev"> </button>
				<button id="next" onclick="change()"> </button>

			</div>
		</main>

	</body>



	<script>
		document.getElementById("next").onclick = function() {
			location.href = "caption.php";
		}
			document.getElementById("prev").onclick = function() {
			location.href = "splash.php";
		}
	</script>



</html>