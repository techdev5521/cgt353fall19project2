<?php

// Include helper_functions.php
include('includes/helper_functions.php');

?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Project2 - Caption</title>

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
							<h1 class="title">Caption</h1>
						</div>
					</div>

					<!-- Include Navigation Buttons -->
					<?php include('includes/navigation-buttons-demo.php'); ?>

					<div class="row" id="comic">
						<div class="col-12 text-center">
							<img src="images/caption.jpg" alt="Gutter" class="img-fluid">
						</div>
						
						<div class="col-12">
							<p>"Captions" are similar to speech bubbles but they specifically target the narrator. They are ususally placed up near the corner of the panel.</p>
						</div>
					</div>

					<!-- Include Navigation Buttons -->
					<?php include('includes/navigation-buttons-demo.php'); ?>

				</main>
			</div>
	</body>
	

	
</html>