<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Project2 - Contact</title>

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
						<h1 class="title">Contact</h1>
					</div>
				</div>

				<form action="https://formspree.io/mledpbvz" method="POST">
					<div class="row" id="comic">

						<div class="col-md-4">
							<div class="form-group">
								<label for="firstName">First Name*</label>
								<input class="form-control" type="text" name="firstName">
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label for="lastName">Last Name*</label>
						 		<input class="form-control" type="text" name="lastName">
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label for="_replyto">Email*</label>
								<input class="form-control" type="email" name="_replyto" >
							</div>
						</div>

		 				<div class="col-12 d-flex justify-content-center">
		 					<div class="form-group">
			 					<label for="message">What's on your mind?*</label>
						 		<textarea class="form-control" name="message" id="message" ></textarea>
			 				</div>
		 				</div>

						<div class="col-12">
							<input class="form-control btn btn-green" type="submit" value="Submit that Puppy!">
						</div>
					
					</div>
				</form>

			</main>
		</div>

	</body>


	
</html>