<?php
/*
7 - Conta espaços e vogais. Dado uma string com uma frase informada pelo usuário (incluindo espaços em branco), conte:

    quantos espaços em branco existem na frase.
    quantas vezes aparecem as vogais a, e, i, o, u. 
*/



function esp_vog($str){
	$str = strtolower($str);
	$espacos = substr_count($str, ' ');
	
	$a = substr_count($str, 'a');
	$e = substr_count($str, 'e');
	$i = substr_count($str, 'i');
	$o = substr_count($str, 'o');
	$u = substr_count($str, 'u');


	echo "Existem ". $espacos . " espaços em branco. <br/>";
	echo "As vogais: <br/>";
	echo "A = " . $a . " vezes. <br/>";
	echo "E = " . $e . " vezes. <br/>";
	echo "I = " . $i . " vezes. <br/>";
	echo "O = " . $o . " vezes. <br/>";
	echo "U = " . $u . " vezes. <br/>";
}


?>

<form method="post">
	<label> Frase: </label> <br/>
	<input type="text" name="str">
	<input type="submit">
</form>

<?php
if(!empty($_POST['str'])){
	esp_vog($_POST['str']);
}