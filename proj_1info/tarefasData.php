<?php
	include 'cabecalho.php';
?>
	<div class="coluna10">.</div>
	<article class="coluna80">
		<h2>Lista de Tarefas</h2>
<?php
	for ($i=1; $i < 4 ; $i++) {
		echo "	<ul>
					<section class = 'lista'>
					<h2>1info".$i."</h2>
				";
	echo"</ul>";
	}

	echo"<div class='divider'>.</div>";
	include 'rodape.php';
?>