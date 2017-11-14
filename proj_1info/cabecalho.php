<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="js/jquerry.js" ></script>
	<script type="text/javascript" src="js/script.js"></script>
	<link rel="stylesheet" type="text/css" href="css/completo.css">
	<link rel="stylesheet" type="text/css" href="css/geral.css">
	<link rel="stylesheet" type="text/css" href="css/profs.css">
	<title>Todos professores</title>
	<meta charset="utf-8">
</head>
<body>
	<!-- cabeçalho -->
	<header>
		<img src="imagens/logo.png" id="logo"/>
		<h1 id="nome_site">Agenda de tarefas</h1>
<?php
	if (!isset($_SESSION['login'])) {
?>
		<form class="porcento" method="post" action="carregando.php">
			<label for="login">login</label>
			<input type="text" name="login">

			<label for="senha">senha</label>
			<input type="password" name="senha">

			<input type="submit" name="enviar">
		</form>
<?php
	}else{
?>
	<div class="porcento">
	<p>Olá, <?=$_SESSION['login']?></p>
	<a href="logout.php">Sair</a>
	</div>
<?php
}
?>
	</header>
	<div class='divider'></div>
	<!-- menu -->
	
	<nav class="menu">
		<a href=""><section class="item menu">Próximas tarefas</section></a>
		<a href=""><section class="item menu">Todas Tarefas</section></a>
		<a href="listaDisciplina.php"><section class="item menu">Tarefas por disciplina</section></a>
		<a href=""><section class="item menu">Tarefas por data</section></a>
		<a href="lista_professores.php"><section class="item menu ativo">Professores</section></a>
		<a href="lista_Alunos.php"><section class="item menu">Colegas</section></a>
	</nav>
	<div class='divider'></div>