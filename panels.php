<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Project2 - Panels</title>

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
					<h1>Panels</h1>
				</div>
				<div id="comic">
					<img src="images/panel.png" width="300px" height="200px" id="comicimage" alt="comic1" />
					<p id="comictext">This small window on the page is known as a "panel" and is the fundamental building block for any comic strip. These little squares can come in all shapes and sizes and its main purpose move the story along by guiding the reader from one panel to the next. Panels can be used to exaggerate actions or to string a series of events together in a way the reader can easily understand. They also offer a wide variety of different styles to gie a bit more flavor to the overall concept of the comic.
					</p>
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
			location.href = "speechbubbles.php";
		}
		document.getElementById("prev").onclick = function() {
			location.href = "template.php";
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