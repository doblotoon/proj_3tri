<?php

$origem = $_FILES['foto']['tmp_name'];

$parte = explode(' ' , $_POST['nome']);
$primeironome = $parte[0];
$sobrenome = end($parte);
$data = date('dmYHis');

$nome = $primeironome.'.'.$sobrenome;

$extensao = explode('/' , $_FILES['foto']['type']);

$destino = "imagens/professores/".$data.$nome.".".$extensao[1];

move_uploaded_file($origem, $destino);

$siape = $_POST['siape'];
$email = $_POST['email'];
$foto = $destino;
$nomep = $_POST['nome'];

$linha = "\n".$siape.",".$nomep.",".$email.",".$foto;

$arquivo = fopen('dados/professores.csv' , 'a+');

fwrite($arquivo, $linha);

fclose($arquivo);



	echo "<meta http-equiv='refresh' content='0;url=carregando.php'>";




?>
