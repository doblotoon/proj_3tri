<?php
include 'cabecalho.php';
include 'professores.php';
//(body)

	$lista = listaProfessores();

	echo '<div class="coluna10">.</div>

	<!-- conteudo principal -->
	<article class="coluna80">
	<section class="lista">
			<ul>';


 if (isset($_SESSION['login'])) {

?>
	
	<a href="cadastroProfessor.php"><h4>Cadastrar Professor</h4></a>
	
<?php
}else{
}
	foreach ($lista as $professor) {
		echo "<div class='professor'>";
		echo "<img scr='".$professor['foto']."'>";
		echo ("<li><a href='detalha_professor.php?cod=".$professor['siape']."'>".$professor['nome']."</a> - ".$professor['email']."</li>");
		echo "</div>";	
	}

?>

			</ul>
		</section>
	</article>
	
<?php

include 'rodape.php';

?>
