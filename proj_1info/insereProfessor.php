<?php
	$a = fopen('dados/professores.csv', 'a+');

	$origem = $_FILES['foto']['tmp_name']

	fwrite($a,"\n".$_POST['siape'].",".$_POST['nome'].",".$_POST['email'].",".);

	fclose($a);

	echo "<meta http-equiv='refresh' content='0;url=carregando.php'>";




?>
