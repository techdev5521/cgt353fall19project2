<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Project2 - Step 1</title>

		<!-- Meta and Link Data -->
		<?php include('includes/meta.php'); ?>
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
					<h1>Step 1: Think of an idea</h1>
				</div>
				<div id="comic">
					<img src="images/page 1.4.png" id="comicimage" alt="comic" />
					<p></p>
				</div>
				<button id="prev" onclick="change0()"> </button>
				<img src="images/pagenumber1.png" alt="page number">
				<button id="next" onclick="change()"> </button>
				<br>
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
		</main>
		<script>
			function change0() {
				location.href="index.php"; ;
			}
			function change() {
				document.getElementById("comicimage").src = "images/page 1.5.png";
				document.getElementById('next').onclick = function() {change3()};
				document.getElementById('prev').onclick = function() {change2()};
			}
			function change2() {
				document.getElementById("comicimage").src = "images/page 1.4.png";
				document.getElementById('next').onclick = function() {change()};
				document.getElementById('prev').onclick = function() {change0()};
			}
			function change3() {
				document.getElementById("comicimage").src = "images/page 1.6.png";
				document.getElementById('next').onclick = function() {change4()};
				document.getElementById('prev').onclick = function() {change()};
			}
			function change4() {
				document.getElementById("comicimage").src = "images/page 1.7.png";
				document.getElementById('next').onclick = function() { location.href="page2.php"; };
				document.getElementById('prev').onclick = function() {change3()};
			}
		</script>
	</body>
</html>