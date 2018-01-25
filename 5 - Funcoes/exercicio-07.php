<?php

/* 7 - Faça um programa que use a função valorPagamento para determinar o valor a ser pago por uma prestação de uma conta. O programa deverá solicitar ao usuário o valor da prestação e o número de dias em atraso e passar estes valores para a função valorPagamento, que calculará o valor a ser pago e devolverá este valor ao programa que a chamou. O programa deverá então exibir o valor a ser pago na tela. Após a execução o programa deverá voltar a pedir outro valor de prestação e assim continuar até que seja informado um valor igual a zero para a prestação. Neste momento o programa deverá ser encerrado, exibindo o relatório do dia, que conterá a quantidade e o valor total de prestações pagas no dia. O cálculo do valor a ser pago é feito da seguinte forma. Para pagamentos sem atraso, cobrar o valor da prestação. Quando houver atraso, cobrar 3% de multa, mais 0,1% de juros por dia de atraso.

SQL =
create table func7 (
	valor int not null,
    dias int not null
);


*/

function valorPagamento($valor, $dias){
	if($dias > 0 ){
		return ($valor * 0.03) + ($valor * (0.001 * $dias)) + $valor;
	}
}


?>


<form method="post">
	<label> Valor da prestação: </label> <br/>
	<input type="number" name="valor"> <br/>
	<label>Dias de atraso:</label> <br/>
	<input type="number" name="dias"> <br/>
	<input type="submit">
</form>


<form method="post"> <button type="submit" name="re">Relatorio </button> </form>

<?php

$banco = new PDO("mysql: host=localhost; dbname=exercicios; charset=utf8", 'root', '');

$valor = filter_input(INPUT_POST, 'valor', FILTER_VALIDATE_INT);
$dias = filter_input(INPUT_POST, 'dias', FILTER_VALIDATE_INT);

if($valor || $dias){
	$sql = "INSERT INTO func7 (valor, dias) values (:valor, :dias)";
	$stmt = $banco->prepare($sql);
	$stmt->bindValue(':valor', $valor);
	$stmt->bindValue(':dias', $dias);

	echo ($stmt->execute()) ? valorPagamento($valor, $dias) . "<br/>" : "Conexão com o banco de dados falhou";
}




if(isset($_POST['re'])){
	if($r = $banco->query("SELECT * FROM func7")){
		$c = 0;
		$total = 0;
		foreach($r as $valor){
			$c++;
			$valor_novo = valorPagamento($valor['valor'], $valor['dias']);
			$total += $valor_novo;
			echo $c ." - " . $valor["valor"] . " - " . $valor['dias'] . " = " . $valor_novo . "<hr>";
			

		}
	}

	echo "<br/><br/> Total de parcelas pagas: " . $c . "<br/> Valor total recebido: " . $total;
}