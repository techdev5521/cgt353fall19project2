<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Project2 - Contact</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/styles.css" />
		<link href="https://fonts.googleapis.com/css?family=Poppins|Staatliches&display=swap" rel="stylesheet">
	</head>
	<body>
		<div id="header">
		<a href="index.php"><img src="images/sitename.png"  alt="website"/></a>
			<img src="images/product.png" alt="product"/>
		</div>
		<br>
		
		<div id="topcontainer" class="box2">
			<?php include('includes/navigation.php'); ?>
		</div>
		
		<br>
		<main>
			<div class="box" id="maincontainer">
				<div id="title">
					<h1>Contact</h1>
				</div>
				<div id="comic">
        <form action="https://formspree.io/mledpbvz" method="POST" onsubmit ="return validation()" name="form" id="form">
          <fieldset>
            <legend>Please fill out the listed fields below</legend>
         <label>
           First Name*<br>
          <input type="text" name="firstName" >
        </label><br>
        <label>
            Last Name*<br>
           <input type="text" name="lastName" >
         </label><br>
         <label>
           Email*<br>
          <input type="email" name="_replyto" >
		 </label><br>
		 <label>
           What's on your mind?*<br>
           <textarea name="message" id="message" ></textarea>
         </label><br>
         <legend>
            *required field
          </legend>
         <button type="submit">Submit that puppy!</button>
        </fieldset>
        </form>
				</div>
				<br>
			</div>
			<br>
			<div id="bottomcontainer" class="box3">
				<div class="box4">
					<h1>Website Created By:</h1>
					<br>
					<h1>Ian Coffman</h1>
					<h1>Josh Heller</h1>
					<h1>Justin Campbell</h1>
				</div>
			</div>

			<script>

function validateEmailAddress(email) {
      var expression = /(?!.*\.{2})^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
      return expression.test(String(email).toLowerCase());
    }

 validation = () => {
      event.preventDefault();

      resetErrors(); 
      let errorSpotted = false;

      const firstName = document.forms["form"]["firstName"]
      const firstNameValue = document.forms["form"]["firstName"].value.trim()
      if (firstNameValue == "") {
        firstName.parentNode.classList.add("error")
        errorSpotted = true;
      }
  
      const lastName = document.forms["form"]["lastName"]
      const lastNameValue = document.forms["form"]["lastName"].value.trim()
      if (lastNameValue == "") {
        lastName.parentNode.classList.add("error")
        errorSpotted = true;
      }

      const _replyto = document.forms["form"]["_replyto"]
      const _replytoValue = document.forms["form"]["_replyto"].value.trim()
      if (_replytoValue == "") {
        _replyto.parentNode.classList.add("error")
        errorSpotted = true;
      }

      if (!validateEmailAddress(_replytoValue)){
        _replyto.parentNode.classList.add("errorEmail")
        errorSpotted = true;
      }
 }
			</script>
		</main>
	</body>
</html>