<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Project2 - Gutter</title>

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
					<h1>Gutter</h1>
				</div>
				<div id="comic">
					<img src="images/gutter.jfif"  id="comicimage" alt="comic1" />
					<p id="comictext">The "Gutter" os the space between panels. They come in many sizes and can generally effect how easy it is to read certain panels.</p>
					<br />
				</div>
				<br>
				<button id="prev"> </button>

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
			
		</div>
		
	</main>
	<script>
		document.getElementById("next").onclick = function() {
			location.href = "caption.php";
		}
			document.getElementById("prev").onclick = function() {
			location.href = "splash.php";
		}
	</script>
</body>
</html>