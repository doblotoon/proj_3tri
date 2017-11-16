<?php

	include 'cabecalho.php';

	include 'alunos.php';

	$matricula = $_GET['cod'];

	$alunos = buscaAluno($matricula);


?>
	<div class="coluna10">.</div>
	<article class="coluna80">
		<section class="foto">
			<img src="<?=$alunos['foto']?>" class='fotos'>
		</section>
			<section class="dados">
				<h2><?=$alunos['nome']?></h2>
				<p><?=$alunos['email']?></p>
				<p><?=$alunos['turma']?></p>
			</section>
	</article>	

<?php

	include 'rodape.php';