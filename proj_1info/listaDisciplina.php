<?php
	include 'cabecalho.php';
	include 'disciplinas.php';

	$cont = 1;
	$disciplinas = file('disciplinas.csv');


	for ($i=1; $i < 4 ; $i++) {
		$funcao = listaOfertas('2017','1info'.$i);
		echo "<section class = 'lista'>
				<h2>1info".$i."</h2>
				<ul>";

		foreach ($funcao as $oferta) {
			$disc = BuscaDisciplinas($oferta['cod_disciplina']);

			echo "<li>"
					.$disc['disciplinas']."-".$disc['codigo'].
				"</li>";
			
			echo "</ul>
			 </section>";
		}
	}

	include 'rodape';
?>
