<?php
	/*include 'cabecalho.php';
	include 'disciplina.php';
 for ($i=1; $i < 4; $i++) { 
 		echo "
 		<section class='lista'>
 			<h2> 1info".$i."</h2>
 			".listaOferta('2017', '1info'.$i);"
 		</section";
 }
?>
<?php


	include 'rodape.php';
	*/

	include 'cabecalho.php';
	include 'disciplinas.php';


	for ($i=1; $i < 4 ; $i++) {
		$funcao = listaOfertas('2017','1info'.$i);
		echo "<section class = 'lista'>
				<h2>1info".$i."</h2>
				<ul>";

		foreach ($funcao as $oferta) {
			if ($oferta['turma'] == '1info1') {
				echo "<li>"
						.$oferta['cod_disciplina']."-".$oferta['cod_professor'].
					 "</li>";
			}
			if ($oferta['turma'] == '1info2') {
				echo "<li>"
						.$oferta['cod_disciplina']."-".$oferta['cod_professor'].
					 "</li>";
			}
			if ($oferta['turma'] == '1info3') {
				echo "<li>"
						.$oferta['cod_disciplina']."-".$oferta['cod_professor'].
					 "</li>";
			}	
		}
		echo "</ul>
			 </section>";
	}

	include 'rodape';


?>
