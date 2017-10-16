<?php
	include 'cabecalho.php';

	include 'professores.php';

	$siape = $_GET['cod'];

	$professor = buscaProfessor($siape);
	print_r($professor);

	include 'rodape.php';

?>