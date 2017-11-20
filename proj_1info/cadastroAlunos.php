<?php
session_start();


include 'cabecalho.php';

if (isset($_SESSION['login'])) {
 ?>

 <div class="tamanho"></div>
 <form class="cadastro" method="post" action="insereAluno.php" enctype="multipart/form-data">

 	<label for="matricula"><h5>Matrícula</h5></label>
 	<input type="text" name="siape">

	<label for="nome"><h5>Nome</h5></label>
	<input type="text" name="nome">

	<label for="turma"><h5>Turma</h5></label>
	<input type="text" name="turma">

	<label for="email"><h5>E-mail</h5></label>
	<input type="email" name="email">

	<label for="foto"><h5>Foto</h5></label>
	<input type="file" name="foto">

	<div class="divider" class="espaco"></div>

	<input class="bordinha" type="submit" name="cadastrar" value="Cadastrar" >
 </form>


 <?php
}else{
	echo "<h2>Você não tem permissão para acessar essa pagina!</h2>";
}
include 'rodape.php';
?>
