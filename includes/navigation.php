<!-- Start navigation.php -->
				<div class="dropdown"> 
				<h1><a onclick="showDropdown()" id="clickDrop">Chapters</a></h1>
						<div id="dropdownItems" class="dropdown-content">
							<a href="index.php">Introduction</a>
							<a href="page1.php">Think of an Idea</a>
							<a href="page2.php">Develop Settings and Characters</a>
							<a href="page3.php">Plan out Your Comic</a>
							<a href="page4.php">Do a Test Run</a>
							<a href="page5.php">Getting Feedback</a>
							<a href="page6.php">Making a Schedule</a>
							<a href="page7.php">Finding a Host for your Comic</a>
							<a href="page8.php">Posting your Comic</a>
							<a href="page9.php">Advertising</a>
							<a href="page10.php">What's Next?</a>
						</div>
						</div>
						<div class="dropdown">
						<h1><a onclick="showDropdown2()" id="clickDrop">Demonstrations</a></h1>
							<div id="dropdownItems2" class="dropdown-content">
								<a href="demo1.php">Summary</a>
								<a href="template.php">Basic Outline</a>
								<a href="panels.php">Panels</a>
								<a href="speechbubbles.php">Speech Bubbles</a>
								<a href="tier.php">Tiers</a>
								<a href="splash.php">Splashes and Spreads</a>
								<a href="gutter.php">Gutter</a>
								<a href="caption.php">Captions</a>
							</div>
							</div>
							<h1><a href="about.php">About</a> <a href="contact.php">Contact</a></h1>
					 </div>
			<br>

			<script>
				function showDropdown() {
					document.getElementById("dropdownItems").classList.toggle("reveal");
				}
				function showDropdown2() {
					document.getElementById("dropdownItems2").classList.toggle("reveal");
				}
			</script>

<!-- End navigation.php -->