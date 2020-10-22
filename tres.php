<?php 
	$nota = rand(1, 20);
	echo $nota;
	switch ($nota) {
		case ($nota < 8):
			print (" O aluno reprovou ");	
			break;
		case ($nota > 8 && $nota < 9.4):
			print (" O aluno foi admitido a exame");	
			break;
		case ($nota > 9.5 && $nota <= 20):
			print (" O aluno foi aprovado");	
			break;
		default:
			echo " Erro ao avaliar a nota";
			break;
	}
?>