
<!DOCTYPE html>
<html>
<?php
session_start();
?>
<head>
	<script type="text/javascript" src="js/jquerry.js" ></script>
	<script type="text/javascript" src="js/script.js"></script>
	<link rel="stylesheet" type="text/css" href="css/completo.css">
	<link rel="stylesheet" type="text/css" href="css/geral.css">
	<link rel="stylesheet" type="text/css" href="css/profs.css">
	<title>agenda de tarefas</title>
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
		<form class="login" method="post" action="carregando.php">
			<label for="login">login</label>
			<input type="text" name="login">

			<label for="senha">senha</label>
			<input type="password" name="senha">

			<input type="submit" name="enviar">
		</form>
<?php
	}else{
?>
	<div class="login">
	<p>Olá, <?=$_SESSION['login']?></p>
	<a href="logout.php">Sair</a>
	</div>
<?php
}
?>
	<div class='divider'></div>
</header>

	<!-- menu -->
	<div id='cor'>	
		<nav class="menu">
			<a href="index.php"><section class="tab ativo" id="tab1">Próximas tarefas</section></a>
			<a href=""><section class="tab" id="tab2">Próximas tarefas</section></a>
			<a href=""><section class="tab" id="tab3">Todas Tarefas</section></a>
			<a href="listaDisciplina.php" ><section class="tab" id="tab4">Tarefas por disciplina</section></a>
			<a href=""><section class="tab" id="tab5">Tarefas por data</section></a>
			<a href="lista_professores.php"><section class="tab" id="tab6">Professores</section></a>
			<a href="lista_Alunos.php"><section class="tab" id="tab7">Colegas</section></a>
		</nav>
		<div class='divider'></div>
	</div>
		