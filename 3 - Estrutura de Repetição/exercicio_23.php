<?php /* 23 - Faça um programa que mostre todos os primos entre 1 e N sendo N um número inteiro fornecido pelo usuário. O programa deverá mostrar também o número de divisões que ele executou para encontrar os números primos. Serão avaliados o funcionamento, o estilo e o número de testes (divisões) executados. */ ?>



<form method="get" action="">
<label>Digite um valor: </label> <br/>

<input type="number" name="num"> <br/>

<input type="submit">



</form>



<?php


if(!empty($_GET['num'])){
	$num = $_GET['num'];
	//echo $num;
	$primo = 0;
	$nPrimo = 0;
	$divisao = 0;
	$primos = [];
	

	for ($c=2; $c <= $num; $c++) { 
	$primo = 0;
	$nPrimo = 0;
		//echo '<br> ' . $c . '<br> ';
 	

		for ($i=2; $i < $c; $i++) { 
			//echo $i;

			//echo $c . ' % ' . $i . ' = ' . ($c % $i) . '<br/>';
			 if($c % $i > 0){
				//echo 'tem sobra <br/>';

				$nPrimo+= 1;

				$divisao += 1;
			} else {
			$primo+= 1;
			$divisao += 1;
			}


			if($primo == 0){
				$primos[] = $c;
			}


		}
	

	//echo $primo . ' VALOR PRIMO <br/>' . $nPrimo . 'VALOR NAO PRIMO';
	//echo ($primo == 0) ? " <br/> O número $c é PRIMO  <br/>" : "  <br/> O número $c não é PRIMO <br/>";






	}

	echo "Os números primos são: ";
	echo (count($primos) > 0) ? '2 ': '';

	$primos = array_unique($primos);
	foreach ($primos as $key => $value) {
		echo $value . ' ';
	}


	echo "<br/> O número total de divisão para chegar nesse resultado foi: $divisao";

}
?>