<?php

// Include helper_functions.php
include('includes/helper_functions.php');

?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Project2 - Step 4</title>

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
						<h1 class="title">Step 04: Do A Test Run</h1>
					</div>
				</div>

				<!-- Include Navigation Buttons -->
				<?php include('includes/navigation-buttons.php'); ?>

				<div class="row" id="comic">
					<div class="col-6 text-center">
						<img src="images/panel-images/04-01.png" alt="Drawing" class="img-fluid">
					</div>
					<div class="col-6 text-center">
						<img src="images/panel-images/04-02.png" alt="Drawing" class="img-fluid">
					</div>

					<div class="col-12">
						<p>Once you’ve got a good script with great panel layout, it’s time to start drawing. Of course, what you draw now doesn’t have to be the final product. This is a good time to be experimental, see what you can realistically do in the time you want to complete each page. During this process, you may find that you’ll have to make some changes to your workflow. </p>
						<p>Maybe you’ll have to make the art simpler and faster to draw in order to get things done quicker, or maybe you’ll have to rethink how many panels you put on page in order to give the story a better pace. Or maybe you’ll realize that this isn’t the type of comic you want to do at all. And that’s fine. You shouldn’t force yourself into doing something you don’t enjoy, especially if it’s something you’re not getting paid for.</p>
					</div>
				</div>

				<!-- Include Navigation Buttons -->
				<?php include('includes/navigation-buttons.php'); ?>

			</main>
		</div>

	</body>



</html>