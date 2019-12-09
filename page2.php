<?php

// Include helper_functions.php
include('includes/helper_functions.php');

?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Project2 - Step 2</title>

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
						<h1 class="title">Step 02: Develop Settings and Characters</h1>
					</div>
				</div>

				<!-- Include Navigation Buttons -->
				<?php include('includes/navigation-buttons-chapter.php'); ?>

				<div class="row" id="comic">
					<div class="col-12 text-center">
						<img src="images/panel-images/02-01.png" alt="Character Design" class="img-fluid">
					</div>

					<div class="col-12">
						<p>Now that you’ve narrowed down to your best idea, it’s time to come up with a cast of characters and a setting for them to be in. Is your character the chosen one on a sacred quest to find the mystical mcguffin, or are they an average Joe who likes to talk about video games with their best friend? Whatever the case, they should fit the concept of the comic to a T, so that they don’t feel out of place. </p>
						<p>As for the setting, this can also vary in complexity depending on the type of story you’re making. In any of these cases, it’s always a good idea to make character sheets for your main cast and other recurring characters in order to keep them consistent in terms of personality and look. Don’t be afraid to develop them even further on in the story either.</p>
					</div>
				</div>

				<!-- Include Navigation Buttons -->
				<?php include('includes/navigation-buttons-chapter.php'); ?>

			</main>
		</div>
		
	</body>


	
</html>