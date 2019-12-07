<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Project2 - Step 10</title>

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
					<h1>Step 10: Keep going!</h1>
				</div>
				<div id="comic">
					<img src="images/page10.png" id="comicimage" alt="comic" />
					<p></p>
				</div>
				<br>
				<button id="prev" onclick="change0()"></button>
				<img src="images/pagenumber10.png" alt="page number">
				
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
				location.href="page9.php" ;
			}
		</script>
	</body>
</html>