<?php 
	for ($i=1; $i <= 20 ; $i++) { 
		$nota = rand(1, 20);
		echo 'A nota do aluno <span style="color#0000cc">' .$i. '</span> é <span style="color#oooocc">' .$nota. '</span><br>';
		echo '<br>';

		if ($nota < 8) {
		echo 'O aluno reprovou';
	}
	elseif ($nota > 8 && $nota < 9.4) {
		echo 'O aluno foi admitido a exame';
	}
	elseif ($nota > 9.5 && $nota < 20) {
	 	echo 'O aluno aprovou';
	}
	echo '<br>';
	
}
?>