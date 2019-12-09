<?php

// Include helper_functions.php
include('includes/helper_functions.php');

?>
<!DOCTYPE html>
<html lang="en-US">

	<head>
		<title>Project2 - Introduction</title>
		
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
						<h1 class="title">Introduction</h1>
					</div>
				</div>

				<!-- Include Navigation Buttons -->
				<?php include('includes/navigation-buttons-chapter.php'); ?>

				<div class="row" id="comic">
					<div class="col-12 text-center">
						<p>Have you ever read any of the following web comics?</p>
					</div>

					<div class="col-lg-4">
						<div class="row text-center">
							<div class="col-12">
								<a href="https://www.homestuck.com/" target="_blank"><p>Homestuck <i class="fas fa-chevron-right ml-2"></i></p></a>
							</div>
							<div class="col-12">
								<img class="img-fluid" src="images/panel-images/00-01-Homestuck.png" alt="Homestuck">
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="row text-center">
							<div class="col-12">
								<a href="https://www.penny-arcade.com/" target="_blank"><p>Penny Arcade <i class="fas fa-chevron-right ml-2"></i></p></a>
							</div>
							<div class="col-12">
								<img class="img-fluid" src="images/panel-images/00-02-Penny_Arcade.png" alt="Penny Arcade">
							</div>
						</div>
					</div>

					<div class="col-lg-4 text-center">
						<div class="row">
							<div class="col-12">
								<a href="https://xkcd.com/" target="_blank"><p>xkcd <i class="fas fa-chevron-right ml-2"></i></p></a>
							</div>
							<div class="col-12">
								<img class="img-fluid" src="images/panel-images/00-03-xkcd.png" alt="xkcd">
							</div>
						</div>
					</div>

					<div class="col">
						<p>Have you thought “I want to do something like that and show it to the world”, but didn’t know how to go about that? Well this is an illustrated just for you! In this comic about making a web comic, we’ll go over all the steps to take in order to get you on the right track of making your gift to the online world. The first thing you need to do is press <i class="fas fa-forward ml-2"></i> below!</p>
					</div>
				</div>

				<!-- Include Navigation Buttons -->
				<?php include('includes/navigation-buttons-chapter.php'); ?>

			</main>
		</div>

	</body>



</html>