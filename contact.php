<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Project2 - Contact</title>

		<!-- Meta and Link Data -->
		<?php include('includes/meta.php'); ?>
	</head>



	<body>

		<header>
			<!-- Include Header Content -->
			<?php include('includes/header.php'); ?>

			<!-- Include Navigation Content -->
			<?php include('includes/navigation.php'); ?>
		</header>

		<main>
			<div class="box" id="maincontainer">

				<div id="title">
					<h1>Contact</h1>
				</div>

				<div id="comic">
					<form action="https://formspree.io/mledpbvz" method="POST" onsubmit="return validation()" name="form" id="form">
						<fieldset>
							<legend>Please fill out the listed fields below</legend>
						
							<label for="firstName">First Name*</label>
							<input type="text" name="firstName">
						
							<label for="lastName">Last Name*</label>
						 	<input type="text" name="lastName">

							 <label for="_replyto">Email*</label>
							<input type="email" name="_replyto" >

			 				<label for="message">What's on your mind?*</label>
						 	<textarea name="message" id="message" ></textarea>

							<button type="submit">Submit that puppy!</button>
						</fieldset>
					</form>
				</div>

			</div>
		</main>

		<footer id="bottomcontainer" class="box3">
			<!-- Include Footer Information -->
			<?php include('includes/footer.php'); ?>
		</footer>

	</body>



	<script>
		function validateEmailAddress(email) {
		var expression = /(?!.*\.{2})^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;

			return expression.test(String(email).toLowerCase());
		}

		// Remove all error states -- used by permission from Casey
	 	// Cass -- Casey wrote this comment ^^^ :)
		resetErrors = () => {
	 		const errorFields = document.getElementsByClassName("error");
				if (errorFields.length > 0) {
					[...errorFields].forEach(errorField => {
						errorField.classList.remove("error");
					});
				}
			}

 		validation = () => {
			event.preventDefault();

			resetErrors(); 
			let errorSpotted = false;

			const firstName = document.forms["form"]["firstName"];
			const firstNameValue = document.forms["form"]["firstName"].value.trim();
			if (firstNameValue == "") {
				firstName.parentNode.classList.add("error");
				errorSpotted = true;
			}
	
			const lastName = document.forms["form"]["lastName"];
			const lastNameValue = document.forms["form"]["lastName"].value.trim();
			if (lastNameValue == "") {
				lastName.parentNode.classList.add("error");
				errorSpotted = true;
			}

			const _replyto = document.forms["form"]["_replyto"];
			const _replytoValue = document.forms["form"]["_replyto"].value.trim();
			if (_replytoValue == "") {
				_replyto.parentNode.classList.add("error");
				errorSpotted = true;
			}

			if (!validateEmailAddress(_replytoValue)){
				_replyto.parentNode.classList.add("errorEmail");
				errorSpotted = true;
			}

			const message = document.forms["form"]["message"];
			const messageValue = document.forms["form"]["message"].value.trim();
			if (messageValue == "") {
				message.parentNode.classList.add("error");
				errorSpotted = true;
			}

			if (!errorSpotted){
				document.getElementById("form").submit();
			}
 		}
	</script>


	
</html>