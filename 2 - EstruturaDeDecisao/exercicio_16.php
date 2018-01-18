<?php /* 16 - Faça um programa que calcule as raízes de uma equação do segundo grau, na forma ax2 + bx + c. O programa deverá pedir os valores de a, b e c e fazer as consistências, informando ao usuário nas seguintes situações:
Se o usuário informar o valor de A igual a zero, a equação não é do segundo grau e o programa deve informar erro.
Se o delta calculado for negativo, a equação não possui raizes reais. Informe ao usuário e encerre o programa;
Se o delta calculado for igual a zero a equação possui apenas uma raiz real; informe-a ao usuário;
Se o delta for positivo, a equação possui duas raiz reais; informe-as ao usuário; 

FORMULA = -b +/- √b**2-4*a*c / (2*a)
DELTA =  b2 – 4ac*/ 


?>


<h3> Equação do segundo grau, na forma ax2 + bx + c. </h3>

<form method="get" action="">
<label>Informe os valores: </label><br/>
<label for="a">A: </label> <input type="text" name="a" size="1" maxlength="3" id="a"> <br/>
<label for="b">B: </label> <input type="text" name="b" size="1" maxlength="3" id="b"> <br/>
<label for="c">C: </label> <input type="text" name="c" size="1" maxlength="3" id="c"> <br/>
<input type="submit" value="Calcular">
</form>
<br/>

<?php
if(!empty($_GET['a']) && !empty($_GET['b']) && !empty($_GET['c']) && is_numeric($_GET['a']) && is_numeric($_GET['b']) && is_numeric($_GET['c']) && $_GET['a'] != 0){

	
		$a = $_GET['a'];
		$b = $_GET['b'];
		$c = $_GET['c'];

		//b2 – 4ac
		$delta = ($b ** 2) - (4 * $a * $c);
		//echo $delta;
		if($delta < 0){
			echo "Delta negativo, programa encerrado.";
		} elseif($delta > 0){
			//(-b +- √Δ)/2a
			$bhaskaraPositiva = (-$b + sqrt($delta)) / (2 * $a);
			$bhaskaraNegativa = (-$b - sqrt($delta)) / (2 * $a);
			echo "x' = " . $bhaskaraPositiva . "<br/> x'' =" . $bhaskaraNegativa;
		} elseif ($delta == 0){
			$bhaskaraPositiva = (-$b + sqrt($delta)) / (2 * $a);
			echo 'Delta é igual a zero, apenas um resultado: ' . $bhaskaraPositiva;
		}
	
} else {
	echo "Valores não foram informados corretamente.";
}




?>