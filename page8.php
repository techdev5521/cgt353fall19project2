<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Project2 - Step 8</title>

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
					<h1>Step 8: Post it!</h1>
				</div>

				<div id="comic">
					<img src="images/page8.png" id="comicimage" alt="comic" />
				</div>

				<button id="prev" onclick="change0()"></button>
				<img src="images/pagenumber8.png" alt="page number">
				<button id="next" onclick="change()"></button>

			</div>
			
		</main>

		<footer id="bottomcontainer" class="box3">
			<!-- Include Footer Information -->
			<?php include('includes/footer.php'); ?>
		</footer>

	</body>



	<script>
		function change0() {
			location.href="page7.php" ;
		}
		function change() {
			location.href="page9.php";
		}
	</script>


		
</html>