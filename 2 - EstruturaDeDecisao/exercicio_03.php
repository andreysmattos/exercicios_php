<?php /* 3 - Faça um Programa que verifique se uma letra digitada é "F" ou "M". Conforme a letra escrever: F - Feminino, M - Masculino, Sexo Inválido. */ ?>





<form method="get" action="">
<label> Digite F ou M: </label>
<br/>
<input type="text" name="sexo">
<br/>
<input type="submit">
</form>
<?php
if(!empty($_GET['sexo'])){
	$sexo = strtoupper($_GET['sexo']);
	switch ($sexo) {
		case 'M':
			echo 'M - Masculino';
			break;
		case 'F':
			echo 'F - Feminino';
			break;
		default:
			echo 'Sexo Inválido';
			break;
	}
}


?>