<?php

// Include helper_functions.php
include('includes/helper_functions.php');

?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Project2 - Gutter</title>

		<!-- Meta and Link Data -->
		<?php include('includes/meta.php'); ?>
	</head>



	<body>

		<div class="container">
			<header>
				<!-- Include Header Content -->
				<?php include('includes/header.php'); ?>

				<!-- Include Navigation Content -->
				<?php include('includes/navigation.php'); ?>
			</header>

			<main class="box background-white p-5 mb-5">

					<div class="row">
						<div class="col">
							<h1 class="title">Gutter</h1>
						</div>
					</div>

					<!-- Include Navigation Buttons -->
					<?php include('includes/navigation-buttons-demo.php'); ?>

					<div class="row" id="comic">
						<div class="col-12 text-center">
							<img src="images/gutter.jfif" alt="Gutter" class="img-fluid">
						</div>
						
						<div class="col-12">
							<p>The "Gutter" os the space between panels. They come in many sizes and can generally effect how easy it is to read certain panels.</p>
						</div>
					</div>

					<!-- Include Navigation Buttons -->
					<?php include('includes/navigation-buttons-demo.php'); ?>

				</main>
			</div>

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