<?php

	function buscaAluno($codigo){ 
	$aluno = array();

	$dados = file("dados/alunos.csv");

	foreach ($dados as $linhas) {
	  $colunas = explode(",", $linhas);

	  if ($colunas[0] == $codigo) {
		$aluno['matricula'] = $colunas[0];
		$aluno['nome'] = $colunas[1];
		$aluno['turma'] = $colunas[2];
		$aluno['email'] = $colunas[3];
		$aluno['foto'] = $colunas[4];

		return $aluno;
	  }
	}
}

  function listaAlunos(){
  $alunos = array();

	$dados = file('dados/alunos.csv');

	foreach ($dados as $linhas) {
		$colunas = explode(",", $linhas);

			$aluno['matricula'] = $colunas[0];
			$aluno['nome'] = $colunas[1];
			$aluno['turma'] = $colunas[2];
			$aluno['email'] = $colunas[3];
		$aluno['foto'] = $colunas[4];

			$alunos[] = $aluno;
	}

	  return $alunos;
  }
  function ListaAlunosTurma($turma){
	$alunos = array();
	$dados = file("dados/alunos.csv");

	foreach ($dados as $posicao => $linha) {
	  if ($posicao != 0) {
		$colunas = explode(",", $linha);
		$aluno = array();
		if ($colunas[2] == $turma) {
			$aluno['matricula'] = $colunas[0];
			$aluno['nome'] = $colunas[1];
			$aluno['turma'] = $colunas[2];
			$aluno['email'] = $colunas[3];
			$aluno['foto'] = $colunas[4];
			$alunos[] = $aluno;

		}
	  }
	}
	return $alunos;
  }


?>