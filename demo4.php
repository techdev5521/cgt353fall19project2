<?php

// Include helper_functions.php
include('includes/helper_functions.php');

?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Project2 - Tiers</title>

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
							<h1 class="title">Tiers</h1>
						</div>
					</div>

					<!-- Include Navigation Buttons -->
					<?php include('includes/navigation-buttons-demo.php'); ?>

					<div class="row" id="comic">
						<div class="col-12 text-center">
							<img src="images/tier.jpg" alt="Tiers" class="img-fluid">
						</div>
						
						<div class="col-12">
							<p>A "Tier" is a term used to describe a series of panels that share the same line. This is mainly used for organization purposes to help you kep track of your elements on the page. This can also be used to set up sequence shots for your comic or a dramatic change in movement or expression. Many possiblities lie within tiers so be sure to experiment with them.</p>
						</div>
					</div>

					<!-- Include Navigation Buttons -->
					<?php include('includes/navigation-buttons-demo.php'); ?>

				</main>
			</div>

	</body>


	
</html>