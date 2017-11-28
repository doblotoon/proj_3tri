<?php

  function listaTarefas(){
    $tarefas = array();

  	$dados = file('dados/tarefas.csv');

  	foreach ($dados as $linhas) {
          $colunas = explode(",", $linhas);
    			$tarefa['turma'] = $colunas[0];
    			$tarefa['data'] = $colunas[1];
    			$tarefa['disciplina'] = $colunas[2];
    			$tarefa['titulo'] = $colunas[3];
    		  $tarefa['descricao'] = $colunas[4];

    			$tarefas[] = $tarefa;

      }
  	  return $tarefas;
    }

  function listaTarefasTurma($turma){
    $tarefas = array();
    $dados = file('dados/tarefas.csv');

    foreach ($dados as $posicao => $linha) {
      if ($posicao != 0) {
        $colunas = explode(',' , $linha);
        $oferta = array();
         if ($colunas[0] == $turma ) {
          $tarefa['turma'] = $colunas[0];
     			$tarefa['data'] = $colunas[1];
     			$tarefa['disciplina'] = $colunas[2];
     			$tarefa['titulo'] = $colunas[3];
     			$tarefa['descricao'] = $colunas[4];
     			$tarefas[] = $tarefa;
         }
      }
    }
    return $tarefas;
  }


  function listaTarefasTurmaDisciplina($turma, $disciplina){
    $tarefas = array();
    $dados = file('dados/tarefas.csv');

    foreach ($dados as $posicao => $linha){
      if ($posicao != 0 ) {
        $colunas = explode(',', $linha);
          if ($colunas[0] == $turma and $colunas[2] == $disciplina) {
           $tarefa['turma'] = $colunas[0];
           $tarefa['data'] = $colunas[1];
           $tarefa['disciplina'] = $colunas[2];
           $tarefa['titulo'] = $colunas[3];
           $tarefa['descricao'] = $colunas[4];
           $tarefas[] = $tarefa;
          }
      }
    }
    return $tarefas;
  }

?>
