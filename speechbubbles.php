<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Project2 - Speech Bubbles</title>

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

		<main class="box background-white p-5 mb-5">
			<div class="box" id="maincontainer">

				<div id="title">
					<h1>Speech Bubbles</h1>
				</div>

				<div id="comic">
					<label>
						<textarea name="message" id="message"></textarea>
					</label>
					<p id="comictext">"Speech Bubbles" are pretty self explainatory, they are small sections of text that indicate speech coming from a particular character in the panel. The person talking is indicated by where the tail meets the mouth of the talking character. An important rule of thumb for speech bubbles is to position them how you would read a book, make sure the speech bubble of whoever is talking first is placed near the top of the page and placed slightly to the left if there is a converstaion. Any other bubbles should follow below the previous ones, and make sure to have all connections between the bubbles apparent to the reader. Speech bubbles can also be used to emphasize tone of voice by using different designs for them, so pick whichever one fits the situation best!</p>

					<p>Click on the bubble to type a message to have the character speak!</p>
				</div>

				<button id="prev"> </button>
				<button id="next" onclick="change()"> </button>

			</div>
	
		</main>

	</body>



	<script>
		document.getElementById("next").onclick = function() {
			location.href = "tier.php";
		}
			document.getElementById("prev").onclick = function() {
			location.href = "panels.php";
		}
	</script>


	
</html>