<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Project2 - Outline</title>

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
					<h1>Basic Outline</h1>
				</div>

				<div id="comic">
					<img src="images/comictemplate.png" width="300px" height="200px" id="style1" alt="comic1" />
					<img src="images/comictemplate2.png" width="300px" height="200px" id="style2" alt="comic2" />
					<img src="images/comictemplate3.jpg" width="300px" height="200px" id="style3" alt="comic3" />
					<p id="comictext">Here are some basic outlines for a comic strip that you would normally see in a book. While they look different they all generally follow the same function as any other piece of literature. They are read from left to right, top to bottom, and generally span across two pages.</p>

					<button onclick="showStyle1()">Style 1</button>
					<button onclick="showStyle2()">Style 2</button>
					<button onclick="showStyle3()">Style 3</button>

					<p>Use the buttons above to see the many styles comic pages can come in!</p>
				</div>

					<button id="prev"> </button>
					<button id="next" onclick="change()"> </button>

			</div>
		</main>

	</body>



	<script>		
		document.getElementById("next").onclick = function() {
			location.href = "panels.php";
		}
		document.getElementById("prev").onclick = function() {
		location.href = "demo1.php";
		}
		function showStyle1() {
			document.getElementById('style1').style.display = 'block';
			document.getElementById('style2').style.display = 'none';
			document.getElementById('style3').style.display = 'none';
		 } 
		function showStyle2() {
			document.getElementById('style1').style.display = 'none';
			document.getElementById('style2').style.display = 'block';
			document.getElementById('style3').style.display = 'none';
		} 
		function showStyle3() {
			document.getElementById('style1').style.display = 'none';
			document.getElementById('style2').style.display = 'none';
			document.getElementById('style3').style.display = 'block';
		}
	</script>



</html>