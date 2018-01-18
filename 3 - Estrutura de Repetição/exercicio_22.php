<?php /* 22 - Altere o programa de cálculo dos números primos, informando, caso o número não seja primo, por quais número ele é divisível. */ ?>



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
	$divisivel = [];

	for ($i=2; $i < $num; $i++) { 
		//echo $i;


		 if($num % $i > 0){
			//echo 'tem sobra <br/>';
			$nPrimo+= 1;
		} else {
		$primo+= 1;
		//echo 'nao tem sobra <br/>';
		$divisivel[] = $i;
		}


	}

	//echo $primo . ' VALOR PRIMO <br/>' . $nPrimo . 'VALOR NAO PRIMO';
	echo ($primo == 0) ? "O número informado é PRIMO" : "O número informado não é PRIMO";

	echo '<br/>';


	 echo "Os números divisiveis por $num são: ";
	foreach ($divisivel as $key => $value) {
		echo $value . ' ';
	} 


}
?>