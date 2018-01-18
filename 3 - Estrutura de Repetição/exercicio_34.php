<?php /* 34 - Os números primos possuem várias aplicações dentro da Computação, por exemplo na Criptografia. Um número primo é aquele que é divisível apenas por um e por ele mesmo. Faça um programa que peça um número inteiro e determine se ele é ou não um número primo. */?>

<form method="get" action="">
 <label>Informe um número: </label> <br/>
 <input type="number" name="num1"><br/>
 <input type="submit">
</form>

<?php
if(!empty($_GET['num1'])){
$resultado = "Número primo.";

	$num = $_GET['num1'];
	for ($i=2; $i < $num; $i++) { 
		if($num % $i ==0){
			$resultado = "Número NÃO primo.";
			
		}
	}

}

?>

<input type="text" readonly value="<?= (!empty($resultado)) ? $resultado : ""?>">