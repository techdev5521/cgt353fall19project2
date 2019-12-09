<?php

// Include helper_functions.php
include('includes/helper_functions.php');

?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Project2 - Panels</title>

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
							<h1 class="title">Panels</h1>
						</div>
					</div>

					<!-- Include Navigation Buttons -->
					<?php include('includes/navigation-buttons-demo.php'); ?>

					<div class="row" id="comic">
						<div class="col-12 text-center">
							<img src="images/panel.png" alt="Example" class="img-fluid">
						</div>
						
						<div class="col-12">
							<p>This small window on the page is known as a "panel" and is the fundamental building block for any comic strip. These little squares can come in all shapes and sizes and its main purpose move the story along by guiding the reader from one panel to the next. Panels can be used to exaggerate actions or to string a series of events together in a way the reader can easily understand. They also offer a wide variety of different styles to gie a bit more flavor to the overall concept of the comic.</p>
						</div>
					</div>

					<!-- Include Navigation Buttons -->
					<?php include('includes/navigation-buttons-demo.php'); ?>

				</main>
			</div>

	</body>



</html>