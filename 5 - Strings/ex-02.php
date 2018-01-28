<?php
/*
2 - Nome ao contrário em maiúsculas. Faça um programa que permita ao usuário digitar o seu nome e em seguida mostre o nome do usuário de trás para frente utilizando somente letras maiúsculas. Dica: lembre−se que ao informar o nome o usuário pode digitar letras maiúsculas ou minúsculas.
*/

function nome_contrario($s){
	$r = strtoupper(strrev($s));
	return $r;
}



?>


<form method="post">
	<label> Informe seu nome:</label> <br/>
	<input type="text" name="nome"> <br/>
	<input type="submit">
</form>


<?php
if(!empty($_POST['nome'])){
	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
	echo nome_contrario($nome);
}
