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
				<form action="https://formspree.io/xbjrooar" method="POST" onsubmit ="return validation()" name="form" id="form">
          <feildset>
            <legend>Please fill out the listed fields below</legend>
         <label>
           First Name*<br>
          <input type="text" name="firstName">
        </label><br>
        <label>
            Last Name*<br>
           <input type="text" name="lastName">
         </label><br>
         <label>
           Email*<br>
          <input type="email" name="_replyto">
		 </label><br>
		 <label>
           What's on your mind?*<br>
           <textarea name="message" id="message"></textarea>
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
			</script>
		</main>
	</body>
</html>