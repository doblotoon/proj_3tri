<?php

$origem = $_FILES['foto']['tmp_name'];

$parte = explode(' ' , $_POST['nome']);
$primeironome = $parte[0];
$sobrenome = end($parte);
$data = date('dmYHis');

$nome = $primeironome.'.'.$sobrenome;

$extensao = explode('/' , $_FILES['foto']['type']);

$destino = "imagens/alunos/".$data.$nome.".".$extensao[1];

move_uploaded_file($origem, $destino);

$matri = $_POST['matricula'];
$email = $_POST['email'];
$foto = $destino;
$turma = $_POST['turma'];
$nomep = $_POST['nome'];

$linha = "\n".$matri.",".$nomep.",".$turma.",".$email.",".$foto;

$arquivo = fopen('dados/alunos.csv' , 'a+');

fwrite($arquivo, $linha);

fclose($arquivo);



	echo "<meta http-equiv='refresh' content='0;url=carregando.php'>";

?>