<?php

// Include helper_functions.php
include('includes/helper_functions.php');

?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Project2 - Step 3</title>

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
						<h1 class="title">Step 03: Planning Out Your Comic</h1>
					</div>
				</div>

				<!-- Include Navigation Buttons -->
				<?php include('includes/navigation-buttons-chapter.php'); ?>

				<div class="row" id="comic">
					<div class="col-12 text-center">
						<img src="images/panel-images/03-01.png" alt="Plot" class="img-fluid">
					</div>

					<div class="col-12">
						<p>This step can vary depending on the type of comic you want to make. If it’s:</p>
						<ul>
							<li><strong>A Gag Strip:</strong> write out a script that can fit into three to four panels or less that delivers a satisfying punchline</li>
							<li><strong>A Story:</strong> come up with a rough outline of, say, the first arc or chapter, and then write out everything from the dialogue to the scenes to the actions that take place based on said outline.</li>
						</ul>
						 <p>In any case, NEVER start drawing things up without a plan. Doing that can lead to complications down the line.</p>
					</div>

					<div class="col-12 text-center">
						<img src="images/panel-images/03-02.png" alt="Plot" class="img-fluid">
					</div>

					<div class="col-12">
						 <p>In any case, NEVER start drawing things up without a plan. Doing that can lead to complications down the line.</p>
						 <p>For example, maybe halfway through drawing the first chapter, you’ll start to think that the previous page should have been done differently to make the story more cohesive, or maybe there was a visual gag that you just thought of that would have really went well on the first page. In that, you’d have to throw out hours of work that could have gone into making your comic the best it can be.</p>
					</div>
				</div>

				<!-- Include Navigation Buttons -->
				<?php include('includes/navigation-buttons-chapter.php'); ?>

			</main>
		</div>

	</body>



</html>