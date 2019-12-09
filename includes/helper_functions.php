<?php 

	/* Returns number of current page
	 *
	 * @return int Number of Page
	 */

	function getCurrentPageNumber(){
		// Get full filename in name.extension format
		$fullFilename = basename($_SERVER['PHP_SELF']);

		// Split $fullFilename on "."
		$fullFilenameArray = explode(".", $fullFilename);

		// Get filename without extension
		$shortFileName = $fullFilenameArray[0];

		// Set fileNumber
		$fileNumber = "";
		if ($shortFileName == "index") {
		$fileNumber = 0;
		} else{
		$shortFileNameArray = explode("page", $shortFileName);
		$fileNumber = $shortFileNameArray[1];
		}

		return $fileNumber;
	}

?>