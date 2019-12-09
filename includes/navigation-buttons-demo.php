<!-- Start navigation-buttons.php -->

<div class="row justify-content-center">
	<div class="col-5 d-flex justify-content-end">
		<?php
			if (getCurrentDemoPageNumber() == "0"){
				echo "";
			} else {
				echo ("<a href=\"demo" . (getCurrentDemoPageNumber()-1) . ".php\"><button class=\"btn btn-green\" id=\"backward\"><i class=\"fas fa-backward\"></i></button></a>");
			}
		?>
	</div>
	<div class="col-1 d-flex justify-content-center">
		<button class="btn btn-green" id="number" disabled><?php echo (getCurrentDemoPageNumber()); ?></button>
	</div>
	<div class="col-5 d-flex justify-content-start">
		<?php
			if (getCurrentDemoPageNumber() == 7){
				echo "";
			} else {
				echo ("<a href=\"demo" . (getCurrentDemoPageNumber()+1) . ".php\"><button class=\"btn btn-green\" id=\"forward\"><i class=\"fas fa-forward\"></i></button></a>");
			}
		?>
	</div>
</div>

<!-- End navigation-buttons.php -->