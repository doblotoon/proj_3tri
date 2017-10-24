<?php

include 'cabecalho.php';
include 'alunos.php';
//(body)

	$lista = listaAlunos();
?>

<div class="coluna10">.</div>

	<!-- conteudo principal -->
	<article class="coluna80">
	<section class="lista">
			<ul>
<?php
	
	foreach ($lista as $aluno) {
		echo ("<div class='aluno'>");
		echo ("<img scr='".$aluno['foto']."'>");
		echo ("<li><a href='detalha_aluno.php?cod=".$aluno['matricula']."'>".$aluno['nome']."</a></li>");
		echo ("</div>");	
	}
?>

			</ul>
		</section>
	</article>
	
<?php
include 'rodape.php';

?>


