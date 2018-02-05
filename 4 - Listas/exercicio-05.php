<?php
/* 
5 - Faça um Programa que leia 20 números inteiros e armazene-os num vetor. Armazene os números pares no vetor PAR e os números IMPARES no vetor impar. Imprima os três vetores.

*/
$par = [];
$impar = [];

?>

<form method="post">
<?php
for($i = 1; $i <= 20; $i++){


?>
<label> Número: </label> <br/>
<input type="number" size="2" name="num[]">
<br/>


<?php
}//fim do for

?>

<input type="submit">
</form>


<?php

if(isset($_POST['num'])){
	foreach($_POST['num'] as $num){
		if($num != ''){
			if($num % 2 == 0){
				$par [] = $num;
			}  else if($num % 2 != 0){
				$impar[] = $num;
			}
		}
	}

}



echo "<pre>";
echo "<br/> Pares: <br/>";
print_r($par);

echo "<br/>";
echo "<br/> Impares: <br/>";
print_r($impar);

echo "<br/>";
echo "<br/>";
echo "<br/> Todos: <br/>";
print_r($_POST['num']);

echo "</pre>";

?>

