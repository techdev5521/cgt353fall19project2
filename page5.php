<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Project2 - Step 5</title>

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
					<h1>Step 5: Getting Feedback</h1>
				</div>
				<div id="comic">
					<img src="images/page 5.png" id="comicimage" alt="comic" />
					<p></p>
				</div>
				<br>
				<button id="prev" onclick="change0()"></button>
				<img src="images/pagenumber5.png" alt="page number">
				<button id="next" onclick="change()"></button>
				<br>
				<br>
			</div>
			<br>

			<footer id="bottomcontainer" class="box3">
				<!-- Include Footer Information -->
				<?php include('includes/footer.php'); ?>
			</footer>
			
		</main>
		<script>
			function change0() {
				location.href="page4.php";
			}
			
			function change2() {
				document.getElementById("comicimage").src = "images/page 5.png";
				document.getElementById('next').onclick = function() {change()};
				document.getElementById('prev').onclick = function() {change0()};
			}
			function change() {
				document.getElementById("comicimage").src = "images/page 5.1.png";
				document.getElementById('next').onclick = function() { location.href="page6.php"; };
				document.getElementById('prev').onclick = function() {change2()};
			}
		</script>
	</body>
</html>