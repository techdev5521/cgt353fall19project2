<!-- Start navigation-buttons.php -->

<div class="row justify-content-center">
	<div class="col-5 d-flex justify-content-end">
		<?php
			if (getCurrentChapterPageNumber() == "index"){
				echo "";
			} elseif (getCurrentChapterPageNumber() == 1) {
				echo ("<a href=\"index.php\"><button class=\"btn btn-green\" id=\"backward\"><i class=\"fas fa-backward\"></i></button></a>");
			} else {
				echo ("<a href=\"page" . (getCurrentChapterPageNumber()-1) . ".php\"><button class=\"btn btn-green\" id=\"backward\"><i class=\"fas fa-backward\"></i></button></a>");
			}
		?>
	</div>
	<div class="col-1 d-flex justify-content-center">
		<button class="btn btn-green" id="number" disabled><?php echo (getCurrentChapterPageNumber()); ?></button>
	</div>
	<div class="col-5 d-flex justify-content-start">
		<?php
			if (getCurrentChapterPageNumber() == 10){
				echo "";
			} else {
				echo ("<a href=\"page" . (getCurrentChapterPageNumber()+1) . ".php\"><button class=\"btn btn-green\" id=\"forward\"><i class=\"fas fa-forward\"></i></button></a>");
			}
		?>
	</div>
</div>

<!-- End navigation-buttons.php -->