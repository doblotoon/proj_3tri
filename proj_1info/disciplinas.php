<?php
	function disciplinas(){
		$dados = file('dados/disciplinas.csv');

		$disciplinas = array();

		foreach ($dados as $linhas) {
			if ($linhas != 0) {
				$colunas = explode(',', $linhas);
				$disciplina['codigo'] = $colunas[0];
				$disciplina['disciplina'] = $colunas[1];
				$disciplinas[] = $disciplina;
			}
		}
		return $disciplinas;
	}

	function BuscaDisciplinas($codigo){
		$dados = file('dados/disciplinas.csv');
		$disciplina = array();

		foreach ($dados as $linhas) {

			$colunas = explode(',', $linhas);

			if ($colunas[0] == $codigo) {
		    	$disciplina['codigo'] = $colunas[0];
		    	$disciplina['disciplina'] = $colunas[1];	
			}	
		}
		return $disciplina;
	}


	function listaOfertas($ano , $turma){
		$dados = file('dados/ofertas.csv');
		$ofertas = array();

		foreach ($dados as $linhas) {
			if ($linhas != 0 ) {
				$colunas = explode(',', $linhas);
				$oferta['ano'] = $colunas[0];
				$oferta['turma'] = $colunas[1];
				$oferta['cod_disciplina'] = $colunas[2];
				$oferta['cod_professor'] = $colunas[3];
				$ofertas[] = $oferta;
			}
		}
		return $ofertas;
	}

?>			