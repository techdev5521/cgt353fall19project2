<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Project2 - Step 1</title>

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
					<h1>Step 1: Think of an idea</h1>
				</div>

				<div id="comic">
					<img src="images/page 1.4.png" id="comicimage" alt="comic" />
				</div>

				<button id="prev" onclick="change0()"> </button>
				<img src="images/pagenumber1.png" alt="page number">
				<button id="next" onclick="change()"> </button>\

			</div>	
		</main>

	</body>



	<script>
		function change0() {
			location.href="index.php"; ;
		}
		function change() {
			document.getElementById("comicimage").src = "images/page 1.5.png";
			document.getElementById('next').onclick = function() {change3()};
			document.getElementById('prev').onclick = function() {change2()};
		}
		function change2() {
			document.getElementById("comicimage").src = "images/page 1.4.png";
			document.getElementById('next').onclick = function() {change()};
			document.getElementById('prev').onclick = function() {change0()};
		}
		function change3() {
			document.getElementById("comicimage").src = "images/page 1.6.png";
			document.getElementById('next').onclick = function() {change4()};
			document.getElementById('prev').onclick = function() {change()};
		}
		function change4() {
			document.getElementById("comicimage").src = "images/page 1.7.png";
			document.getElementById('next').onclick = function() { location.href="page2.php"; };
			document.getElementById('prev').onclick = function() {change3()};
		}
	</script>



</html>