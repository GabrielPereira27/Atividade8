<?php 
	$pararLoop = 9;
	// este for é executado infinamente
	for ($numero =0; ; $numero++) { 
		if ($numero == $pararLoop) {
			break;
		}
		echo $numero. "<br>";
	}
?>