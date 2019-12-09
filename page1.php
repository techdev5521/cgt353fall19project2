<?php

// Include helper_functions.php
include('includes/helper_functions.php');

?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Project2 - Step 1</title>

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
						<h1 class="title">Step 01: Think of An Idea</h1>
					</div>
				</div>

				<!-- Include Navigation Buttons -->
				<?php include('includes/navigation-buttons-chapter.php'); ?>

				<div class="row" id="comic">
					<div class="col-12 text-center">
						<img src="images/panel-images/01-01.png" alt="" class="img-fluid">
					</div>

					<div class="col-12">
						<p>Now this might be an easier step for some more than others. Some people have one idea that they’re dead set on following, while others have dozens of different ideas bouncing around in their head that they don’t know what to do with.</p>
					</div>

					<div class="col-12 text-center">
						<img src="images/panel-images/01-02.png" alt="" class="img-fluid">
					</div>

					<div class="col-12">
						<p>In most cases, it’s best to stick to one idea and develop it as much as possible. If you’re having trouble picking just one, try to narrow them down into the ones you think would make an interesting comic, and then narrow it down even further to the best idea. </p>
						<p>It’s also important to think about the type of webcomic you want to make. Do you want it to be like a newspaper comic where it’s a gag a week, or a massive story with twists, turns, and interesting story arcs? Does it fall into the genre of comedy, horror, action, drama? All of these questions are for you to answer, so don’t be afraid to follow your heart.</p>
					</div>
				</div>

				<!-- Include Navigation Buttons -->
				<?php include('includes/navigation-buttons-chapter.php'); ?>

			</main>
		</div>

	</body>



</html>