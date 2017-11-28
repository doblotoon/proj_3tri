<?php
	include 'cabecalho.php';

	include 'professores.php';

	$siape = $_GET['cod'];

	$professor = buscaProfessor($siape);


?>
	<div class="coluna10">.</div>

	<article class="coluna80">
		<section class="foto">
			<section class="clicavel" id="img">
				<img class='fotos' src="<?=$professor['foto']?>" >
			</section>

			<div class="modal img escondido">
				<div class="fechar ">
					<img src="imagens/x.png">
				</div>
				<img src="<?=$professor['foto']?>">
			</div>
		</section>

		<section class="dados">
			<h2><?=$professor['nome']?></h	2>
			<p><?=$professor['email']?></p>
		</section>
	</article>	

























<?php

	include 'rodape.php';