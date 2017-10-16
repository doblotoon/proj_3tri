<?php
  function buscaProfessor($codigo){	
  	$professor = array();

  	$dados = file("dados/professores.csv");

  	foreach ($dados as $linhas) {
  		$colunas = explode(",", $linhas);
  		if ($colunas[0] == $codigo) {
  			$professor['siape'] = $colunas[0];
  			$professor['nome'] = $colunas[1];
  			$professor['email'] = $colunas[2];
  			$professor['foto'] = $colunas[3];
  		}
  	}


  	return $professor;
  }


  function listaProfessores(){
  $professores = array();

  	$dados = file('dados/professores.csv');

  	foreach ($dados as $linhas) {
  		$colunas = explode(",", $linhas);

  			$professor['siape'] = $colunas[0];
  			$professor['nome'] = $colunas[1];
  			$professor['email'] = $colunas[2];
  			$professor['foto'] = $colunas[3];

  			$professores[] = $professor;
  	}



  	return $professores;
  }


?>