<?php
	include 'cabecalho.php';

	include 'professores.php';

	$siape = $_GET['cod'];

	$professor = buscaProfessor($siape);


?>
	<div class="coluna10">.</div>
	<article class="coluna80">
		<section class="foto">
			<img src="<?=$professor['foto']?>" class='fotos'>
		</section>
		<section class="dados">
			<h2><?=$professor['nome']?></h2>
			<p><?=$professor['email']?></p>
		</section>
</article>	

<?php

	include 'rodape.php';