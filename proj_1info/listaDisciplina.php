<?php
	include 'cabecalho.php';
	include 'disciplinas.php';
	include 'professores.php';

	$cont = 1;
	$disciplinas = file('dados/disciplinas.csv');


	for($i=1; $i < 4 ; $i++) {
		$funcao = listaOfertas('2017','1info'.$i);
		echo "<ul>
				<section class = 'lista'>
			 	<h2>1info".$i."</h2>";



			foreach ($funcao as $posi => $linha) {
				$colunas = explode(',' , $linha);
				if ($posi != 0) {
					$disciplina = buscaDisciplinas($colunas['cod_disciplina']);
					$professor = buscaProfessor($colunas['cod_professor']);
					echo "<li>
							".$disciplina['disciplina']." - ".$professor['nome']." 
						  </li>";	
				}
				
			}					

		echo 	"</section>
			  </ul>";	
	}

	include 'rodape.php';
?>