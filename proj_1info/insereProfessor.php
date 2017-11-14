<?php
	$a = fopen('dados/professores.csv', 'a+');
	fwrite($a,"\n".$_POST['siape'].",".$_POST['nome'].",".$_POST['email'].",".$_POST['foto']);
	fclose($a);

	echo "<meta http-equiv='refresh' content='0;url=carregando.php'>";




?>