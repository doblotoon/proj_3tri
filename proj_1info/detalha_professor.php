<?php
	include 'cabecalho.php';

	include 'professores.php';

	$siape = $_GET['cod'];

	$professor = buscaProfessor($siape);


?>
	<div class="coluna10">
	.
	</div>
	<article class="coluna80">
		<section class="foto">
			<div class="clicavel" id="img1">
				<img src="<?=$professor['foto']?>" class='fotos'>
			</div>
			<div class="modal img1 escondido">
				<img src="<?=$professor['foto']?>">
			</div>
			<div class="fechar escondido">
				<img src="imagens/x.png">
			</div>
		</section>
		<section class="dados">
			<h2><?=$professor['nome']?></h2>
			<p><?=$professor['email']?></p>
		</section>
	</article>	

<?php

	include 'rodape.php';