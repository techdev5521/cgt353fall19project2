<?php

// Include helper_functions.php
include('includes/helper_functions.php');

?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Project2 - Step 5</title>

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
						<h1 class="title">Step 05: Getting Feedback</h1>
					</div>
				</div>

				<!-- Include Navigation Buttons -->
				<?php include('includes/navigation-buttons.php'); ?>

				<div class="row" id="comic">
					<div class="col-12 text-center">
						<img src="images/panel-images/05-01.png" alt="Feedback" class="img-fluid">
					</div>

					<div class="col-12">
						<p>After you’ve completed the first draft of your comic, you should get some feedback. This can be obtained by:</p>
						<ul>
							<li>Having friends and family read what you’ve done, </li>
							<li>Getting a teacher’s professional opinion, </li>
							<li>Posting it onto a popular site like DeviantArt or Twitter to hear what the internet has to say.</li>
						</ul>
						<p>If you’re getting positive feedback, good! If you’re getting negative feedback, don’t worry. Assuming that its constructive criticism, take what’s been said and either fix the flaws in your draft or keep that feedback in mind when writing the next chapter or comic strip.</p>
					</div>
				</div>

				<!-- Include Navigation Buttons -->
				<?php include('includes/navigation-buttons.php'); ?>

			</main>
		</div>


	</body>


		
</html>