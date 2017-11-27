<?php
 include 'cabecalho.php';

 session_start();
	$login = $_POST['login'];
	$senha = $_POST['senha'];

	if ($login == 'admin' and $senha == 'admin') {
		echo "<img src='imagens/carregando.gif'>";


		$_SESSION['nome'] = 'Administrador';
		$_SESSION['login'] = 'admin';

		echo "<meta http-equiv='refresh' content='3;url=lista_professores.php'>";

	}else{
		echo "<img class='erro' src='imagens/carregando.gif'>";
		echo "<h2>Login ou senha invalidos!</h2>";
		echo "<meta http-equiv='refresh' content='3;url=lista_professores.php'>";	
	}

	 include 'rodape.php';
?>