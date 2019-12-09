<?php

// Include helper_functions.php
include('includes/helper_functions.php');

?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Project2 - Step 6</title>

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
						<h1 class="title">Step 06: Making A Schedule</h1>
					</div>
				</div>

				<!-- Include Navigation Buttons -->
				<?php include('includes/navigation-buttons-chapter.php'); ?>

				<div class="row" id="comic">
					<div class="col-12 text-center">
						<img src="images/panel-images/06-01.png" alt="Schedule" class="img-fluid">
					</div>

					<div class="col-12">
						<p>After making the final draft, think about how often you can update your comic. Will it be once a week? Once a month? Once every two months? That’ll be up to you to determine.</p>
						<p>Once you’ve got an idea of how often you’ll update, think about how large your buffer will be. Most comics have more than one page done at a time in order to allow for a constant flow of content, or in the case that a page can’t be done on time due to various circumstances. This is what we call a buffer, and how large your buffer will be will also vary.</p>
					</div>
				</div>

				<!-- Include Navigation Buttons -->
				<?php include('includes/navigation-buttons-chapter.php'); ?>

			</main>
		</div>

	</body>



</html>