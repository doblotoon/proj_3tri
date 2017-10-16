<?php
include 'cabecalho.php';
include 'professores.php';
//(body)

	$lista = listaProfessores();
	
	foreach ($lista as $professor) {
		echo "<div class='professor'>";
		echo "<img scr='".$professor['foto']."'>";
		echo ("<a href='detalha_professor.php?cod=".$professor['siape']."'>".$professor['nome']."</a>");
		echo "</div>";	
	}


//(/body)
include 'rodape.php';
?>