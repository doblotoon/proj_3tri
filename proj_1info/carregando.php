<?php
 include 'cabecalho.php';

 session_start();
	$login = $_POST['login'];
	$senha = $_POST['senha'];

	echo "	<div class='coluna20'>.</div>";

	if ($login == 'admin' and $senha == 'admin') {
		echo "<img class='carregando' src='imagens/carregando.gif'>";


		$_SESSION['nome'] = 'Administrador';
		$_SESSION['login'] = 'admin';

		echo "<meta http-equiv='refresh' content='3;url=index.php'>";

	}else{
		echo "<img class='carregando' src='imagens/carregando.gif'>";
		echo "<h2>Login ou senha invalidos!</h2>";
		echo "<meta http-equiv='refresh' content='3;url=index.php'>";	
	}

	 include 'rodape.php';
?>