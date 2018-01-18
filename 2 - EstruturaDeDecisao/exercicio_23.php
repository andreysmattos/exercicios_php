<?php /* 23 - Faça um Programa que peça um número e informe se o número é inteiro ou decimal. Dica: utilize uma função de arredondamento. */ ?>







<form method="get" action="">
	<label>Verificar se o número é inteiro ou decimal: </label><br/>
	<input type="text" name="num"> <input type="submit" value="Verificar">
</form>

<?php


/* 

TESTES

$a = 1.3;
$b = 1;


echo is_int($a); // retorna zero
echo '<br/>';
echo '<br/>';
echo is_int($b); //retorna 1
FIM TESTES
*/

if(!empty($_GET['num']) && is_numeric($_GET['num'])){
	$num = 0 + $_GET['num']; // Acho que fiz gambiara, mas deu certo!.


	if(is_int($num)){
		echo "O número informado é <u> inteiro </u>.";
	} else {
		echo "O número informado é <u> decimal </u>.";
	}
}

?>
