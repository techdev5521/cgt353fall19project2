<?php

// Include helper_functions.php
include('includes/helper_functions.php');

?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Project2 - Step 7</title>

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
						<h1 class="title">Step 07: Finding A Host For Your Comic</h1>
					</div>
				</div>

				<!-- Include Navigation Buttons -->
				<?php include('includes/navigation-buttons-chapter.php'); ?>

				<div class="row" id="comic">
					<div class="col-12 text-center"><img src="images/panel-images/07-01.png" alt="Hosting" class="img-fluid"></div>

					<div class="col-12">
						<p>With all that work done, it’s time to start thinking where you’ll be posting your comic. Will you: </p>
						<ul>
							<li>Post everything on a social media?</li>
							<li>Find a website that specializes in hosting web comics? See <a href="https://www.theduckwebcomics.com/">The Duck <i class="fas fa-chevron-right"></i></a> or <a href="https://www.smackjeeves.com/">Smackjeeves <i class="fas fa-chevron-right"></i></a></li>
						</ul>
						<p>Or will you go a step further and make a website to host in on yourself? In the case of the latter, you’ll have to get a web domain. That’s assuming you have the skills to build a website for your comic, of course. </p>
						<p>While many would take the option of using an already established website, that option limits the ability to monetize your work in exchange for convenience.</p>
					</div>
				</div>

				<!-- Include Navigation Buttons -->
				<?php include('includes/navigation-buttons-chapter.php'); ?>

			</main>
		</div>

	</body>


		
</html>