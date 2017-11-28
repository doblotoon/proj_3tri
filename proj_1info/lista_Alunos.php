<?php

include 'cabecalho.php';
include 'alunos.php';
//(body)

	$lista = listaAlunos();
?>

<div class="coluna10">.</div>

	<!-- conteudo principal -->
	<article class="coluna80">

<?php

	if (isset($_SESSION['login'])) {
	echo '<a href="cadastroAlunos.php"><h4>Cadastrar aluno</h4></a>';	
	}
	
?>	

	<section class="lista">
	<H2>1INFO1</H2>
			<ul>
			
<?php
	
	$lista = listaAlunosTurma('1info1');

	foreach ($lista as $aluno) {
	
	
		echo ("<li><a href='detalha_aluno.php?cod=".$aluno['matricula']."'>".$aluno['nome']."</a></li>");
		
	}
?>
	</section>
	<section class="lista">
	<H2>1INFO2</H2>

<?php
	$lista = listaAlunosTurma('1info2');

	foreach ($lista as $aluno) {
	
		
		echo ("<li><a href='detalha_aluno.php?cod=".$aluno['matricula']."'>".$aluno['nome']."</a></li>");
		
	}
?>
	</section>
	<section class="lista">
	<H2>1INFO3</H2>

<?php

	$lista = listaAlunosTurma('1info3');

	foreach ($lista as $aluno) {
		echo ("<li><a href='detalha_aluno.php?cod=".$aluno['matricula']."'>".$aluno['nome']."</a></li>");
		
	}

?>

			</ul>
		</section>
	</article>
	
<?php
include 'rodape.php';

?>


