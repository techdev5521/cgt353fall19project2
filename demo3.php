<?php

// Include helper_functions.php
include('includes/helper_functions.php');

?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Project2 - Speech Bubbles</title>

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
							<h1 class="title">Speech Bubbles</h1>
						</div>
					</div>

					<!-- Include Navigation Buttons -->
					<?php include('includes/navigation-buttons-demo.php'); ?>

					<div class="row" id="comic">
						<div class="col-12 text-center"><form action="#">
							<div class="form-group">
									<label for="message">Message:</label>
									<textarea class="form-control mx-auto" name="message" id="message" cols="30" rows="10"></textarea>
								</div>
							</form>
						</div>
						
						<div class="col-12">
							<p>"Speech Bubbles" are pretty self explainatory, they are small sections of text that indicate speech coming from a particular character in the panel. The person talking is indicated by where the tail meets the mouth of the talking character. An important rule of thumb for speech bubbles is to position them how you would read a book, make sure the speech bubble of whoever is talking first is placed near the top of the page and placed slightly to the left if there is a converstaion. Any other bubbles should follow below the previous ones, and make sure to have all connections between the bubbles apparent to the reader. Speech bubbles can also be used to emphasize tone of voice by using different designs for them, so pick whichever one fits the situation best!</p>
							<p>Click on the bubble to type a message to have the character speak!</p>
						</div>
					</div>

					<!-- Include Navigation Buttons -->
					<?php include('includes/navigation-buttons-demo.php'); ?>

				</main>
			</div>

	</body>


	
</html>