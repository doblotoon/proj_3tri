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


			if ($oferta['turma'] == '1info1') {
			 		echo "<li>"
						.$disc['disciplinas']."-".$disc['codigo'].
					 "</li>";
			}
			if ($oferta['turma'] == '1info2') {
				echo "<li>"
						.$disc['disciplinas']."-".$prof['nome'].
					 "</li>";
			}
			if ($oferta['turma'] == '1info3') {
				echo "<li>"
						.$disc['disciplinas']."-".$prof['nome'].
					 "</li>";
			}
		}
		echo "</ul>
			 </section>";
	}

	include 'rodape';


?>
