<?php
/*
20 - As Organizações Tabajara resolveram dar um abono aos seus colaboradores em reconhecimento ao bom resultado alcançado durante o ano que passou. Para isto contratou você para desenvolver a aplicação que servirá como uma projeção de quanto será gasto com o pagamento deste abono.

    Após reuniões envolvendo a diretoria executiva, a diretoria financeira e os representantes do sindicato laboral, chegou-se a seguinte forma de cálculo: 

    a.Cada funcionário receberá o equivalente a 20% do seu salário bruto de dezembro; a.O piso do abono será de 100 reais, isto é, aqueles funcionários cujo salário for muito baixo, recebem este valor mínimo; Neste momento, não se deve ter nenhuma preocupação com colaboradores com tempo menor de casa, descontos, impostos ou outras particularidades. Seu programa deverá permitir a digitação do salário de um número indefinido (desconhecido) de salários. Um valor de salário igual a 0 (zero) encerra a digitação. Após a entrada de todos os dados o programa deverá calcular o valor do abono concedido a cada colaborador, de acordo com a regra definida acima. Ao final, o programa deverá apresentar:
    O salário de cada funcionário, juntamente com o valor do abono;
    O número total de funcionário processados;
    O valor total a ser gasto com o pagamento do abono;
    O número de funcionário que receberá o valor mínimo de 100 reais;
    O maior valor pago como abono; A tela abaixo é um exemplo de execução do programa, apenas para fins ilustrativos. Os valores podem mudar a cada execução do programa. 

Projeção de Gastos com Abono
============================ 
 
Salário: 1000
Salário: 300
Salário: 500
Salário: 100
Salário: 4500
Salário: 0
 
Salário    - Abono     
R$ 1000.00 - R$  200.00
R$  300.00 - R$  100.00
R$  500.00 - R$  100.00
R$  100.00 - R$  100.00
R$ 4500.00 - R$  900.00
 
Foram processados 5 colaboradores
Total gasto com abonos: R$ 1400.00
Valor mínimo pago a 3 colaboradores
Maior valor de abono pago: R$ 900.00

SQL:
CREATE TABLE `salarios` (
  `id` int(11) NOT NULL,
  `salario` float(10,2) DEFAULT NULL
)


*/


?>

<form method="post">
	<label> Salário </label> <br/>
	<input type="number" name="valor">
	<input type="submit">
</form>


<?php
try{
	$conn = new \PDO("mysql: host=localhost; dbname=exercicios; charset=utf8", 'root', '');
} catch(exception $e){
	echo "erro de conexão com banco de dados";
}

if(!empty($_POST['valor'])){
	$salario = filter_input(INPUT_POST, 'valor');

	//echo $salario;

	

	$sql = "INSERT INTO salarios (salario) values (:salario)";

	$stmt = $conn->prepare($sql);
	$stmt->bindValue(':salario', $salario);
	$stmt->execute();
}


$sql = "SELECT * FROM salarios";
//print_r($conn->exec($sql));
if($conn->query($sql)){
	echo "Salário    --- Abono <hr>";
	$tot = 0;
	$abTot = 0;
	$minPag = 0;
	$maior = 0;

	foreach($conn->query($sql) as $value){
		$tot++;
		$abono = $value['salario'] * 0.2;
		$abono = ($abono < 100) ? 100 : $abono;
		$abTot += $abono;
		$minPag += ($abono == 100) ? 1 : 0;
		$maior = ($value['salario'] > $maior) ? $value['salario'] : $maior;
		echo "R$: ". $value['salario'];
		echo " - R$: " . $abono . "<br>";
	}


	echo "<hr>";
	echo "Foram processados ".$tot." colaboradores <br>";
	echo "Total gasto com abonos: R$ ".$abTot." <br/>";
	echo "Valor mínimo pago a ".$minPag." colaboradores<br>";
	echo "Maior valor de abono pago: R$ " . $maior . "<br>";

}

?>