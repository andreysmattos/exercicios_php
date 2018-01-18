<?php /* 14 - Faça um programa que peça 10 números inteiros, calcule e mostre a quantidade de números pares e a quantidade de números impares. */ ?>


<form method="get" action="">
<?php
for ($i=1; $i <= 10; $i++) { 


echo "<label> $i Número: </label> <br/>";
echo "<input type='number' name='num$i'> <br/>";
}
?>
<br/>
<input type="submit">
<br/>

</form>


<?php
if(!empty($_GET['num1']) && !empty($_GET['num2']) && !empty($_GET['num3']) && !empty($_GET['num4']) && !empty($_GET['num5']) && !empty($_GET['num6']) && !empty($_GET['num7']) && !empty($_GET['num8']) && !empty($_GET['num9']) && !empty($_GET['num10'])){
	$par = 0;
	$impar = 0;


	for ($i=1; $i <= 10; $i++) { 

		

		if($_GET["num$i"] % 2 == 0){
			$par++;
		} else {
			$impar++;
		}


		
	}
	echo '<h4>';
	echo 'Quantidade de números pares: ' . $par;
	echo '<br/>';
	echo 'Quantidade de números impares: ' . $impar;
	echo '</h4>';



}


?>


