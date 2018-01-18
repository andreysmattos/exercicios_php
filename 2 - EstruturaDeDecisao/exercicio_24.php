<?php /* 24 - Faça um Programa que leia 2 números e em seguida pergunte ao usuário qual operação ele deseja realizar. O resultado da operação deve ser acompanhado de uma frase que diga se o número é:
par ou ímpar;
positivo ou negativo;
inteiro ou decimal.*/ ?>
<form method="get" action="">
	<label> Informe os valores: </label> <br/>
	<input type="text" name="num1"> <br/>
	<input type="text" name="num2"> <br/>
	<select name="operacao">
		<option value="1"> Somar</option>
		<option value="2"> Diminuir</option>
		<option value="3"> Multiplicar</option>
		<option value="4"> Dividir</option>
		<option value="5"> Elevar</option>
	</select><br/>
	<input type="submit" value="Calcular">
</form>
<?php
	if(!empty($_GET['num1']) && !empty($_GET['num2']) && is_numeric($_GET['num1']) && is_numeric($_GET['num2'])){
		$num1 = $_GET['num1'];
		$num2 = $_GET['num2'];

		switch ($_GET['operacao']) {
			case '1':
				$resultado = $num1 + $num2;
				break;
			
			case '2':
				$resultado = $num1 - $num2;
				break;
			
			case '3':
				$resultado = $num1 * $num2;
				break;
			
			case '4':
				$resultado = $num1 / $num2;
				break;
			
			case '5':
				$resultado = $num1 ** $num2;
				break;
		}
		echo 'Resultado: ' . $resultado . '<br/>';
		$parImpar = ($resultado % 2 == 0) ? 'Par' : 'Impar';
		$positivoNegativo = ($resultado > 0) ? "Positivo" : "Negativo";
		$positivoNegativo = ($resultado == 0) ? "Neutro" : $positivoNegativo;
		echo $parImpar . '<br/>';
		echo $positivoNegativo . '<br/>';
		$inteiroDecimal = (is_int(0 + $resultado) ? 'Inteiro' : "Decimal");
		echo $inteiroDecimal;
	}

?>