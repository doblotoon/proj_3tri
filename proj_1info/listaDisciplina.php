<?php
	include 'cabecalho.php';
	include 'disciplinas.php';

	$cont = 1;
	$disciplinas = file('dados/disciplinas.csv');


	for ($i=1; $i < 4 ; $i++) {
		$funcao = listaOfertas('2017','1info'.$i);
		echo "<ul>
				<section class = 'lista'>
					<h2>1info".$i."</h2>";

			foreach ($disciplinas as $posi => $linha) {
				$colunas = explode(',', $linha);
				if ($posi != 0) {
					$disciplina = buscaDisciplinas($funcao['cod_disciplina']);
					$professor = buscaProfessor($funcao['cod_professor']);
					echo "<li>
							".$disciplina." - ".$professor." 
						  </li>";	
				}
				
			}					

		echo "</section>
			  </ul>";	
	}

	include 'rodape';
?>