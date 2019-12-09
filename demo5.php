<?php

// Include helper_functions.php
include('includes/helper_functions.php');

?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Project2 - Splashes and Spreads</title>

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
							<h1 class="title">Splashes and Spreads</h1>
						</div>
					</div>

					<!-- Include Navigation Buttons -->
					<?php include('includes/navigation-buttons-demo.php'); ?>

					<div class="row" id="comic">
						<div class="col-12 text-center">
							<img src="images/splash.jpg" alt="Splash" class="img-fluid">
						</div>
						
						<div class="col-12">
							<p>A "Splash" is a term used to describe how an image takes up the entire page, and a "Spread" takes up more than one page. These are used for big important action shots, grand appearances, or just large referenceing shots that work better if it takes up the whole page or multiple). With that much room at your disposal, it can get kind of overwhelming trying to fill in the whole space, but really think about blocking everything out first so you can see if putting certain objects or characters in those locations give the shot more unity.</p>
						</div>
					</div>

					<!-- Include Navigation Buttons -->
					<?php include('includes/navigation-buttons-demo.php'); ?>

				</main>
			</div>

	</body>


	
</html>