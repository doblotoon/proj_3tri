
<!DOCTYPE html>
<html>
<?php
session_start();
?>
<head>
	<link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
	<link rel="icon" href="imagens/favicon.ico" type="image/x-icon">
	<script language='javascript' type="text/javascript" src="js/jquerry.js" ></script>
	<script language='javascript' type="text/javascript" src="js/script.js"></script>
	<link rel="stylesheet" type="text/css" href="css/completo.css">
	<link rel="stylesheet" type="text/css" href="css/geral.css">
	<link rel="stylesheet" type="text/css" href="css/profs.css">
	<title>Agenda de tarefas</title>
	<meta charset="utf-8">
</head>
<body>
	<!-- cabeçalho -->
	<header>
		<a href="index.php"><img src="imagens/imagem_agenda.png" id="logo"/></a>
		<h1 id="nome_site">Agenda de tarefas</h1>
<?php
	if (!isset($_SESSION['login'])) {
?>
		<form class="login" method="post" action="carregando.php">
			<label class="log" for="login">Login</label>
			<input placeholder="nome de usuário" type="text" name="login">

			<label class="log" for="senha">Senha</label>
			<input placeholder="senha" type="password" name="senha">

			<input type="submit" name="enviar">
			<!--<input type="image" scr="images/enviar.png" name="MinhaImagem">-->
			<!--<img id='enviar' src="imagens/enviar.png"> isso fica para outro dia-->
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
			<a href="index.php"><section class="tab" id="tab1">Home</section></a>
			<a href=""><section class="tab" id="tab2">próximas tarefas</section></a>
			<a href=""><section class="tab" id="tab3">Todas Tarefas</section></a>
			<a href="listaDisciplina.php" ><section class="tab" id="tab4">Tarefas por disciplina</section></a>
			<a href="tarefasData.php"><section class="tab" id="tab5">Tarefas por data</section></a>
			<a href="lista_professores.php"><section class="tab" id="tab6">Professores</section></a>
			<a href="lista_Alunos.php"><section class="tab" id="tab7">Colegas</section></a>
		</nav>
		<div class='divider'></div>
	</div>
		