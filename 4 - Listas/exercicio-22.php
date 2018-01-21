<?php
/*
22 - Sua organização acaba de contratar um estagiário para trabalhar no Suporte de Informática, com a intenção de fazer um levantamento nas sucatas encontradas nesta área. A primeira tarefa dele é testar todos os cerca de 200 mouses que se encontram lá, testando e anotando o estado de cada um deles, para verificar o que se pode aproveitar deles.

    Foi requisitado que você desenvolva um programa para registrar este levantamento. O programa deverá receber um número indeterminado de entradas, cada uma contendo: um número de identificação do mouse o tipo de defeito:
    necessita da esfera;
    necessita de limpeza; a.necessita troca do cabo ou conector; a.quebrado ou inutilizado. Ao final o programa deverá emitir o seguinte relatório: 

Quantidade de mouses: 100

Situação                        Quantidade              Percentual
1- necessita da esfera                  40                     40%
2- necessita de limpeza                 30                     30%
3- necessita troca do cabo ou conector  15                     15%
4- quebrado ou inutilizado              15                     15%

SQL:
create table mouse (
	id int not null primary key auto_increment,
    `desc` varchar(100)
);

*/

function porcentagem($valor, $total){
	$resultado = ($valor / $total) * 100;
	return number_format($resultado, 1); 
}

try {
	$banco = new \PDO("mysql: host=localhost; dbname=exercicios; charset=utf8", 'root', '');
	$sql = "SELECT COUNT(*) as qtde from mouse";
	$stmt = $banco->query($sql);
	$r = $stmt->fetch();
	//print_r($r);
	$qtde = $r['qtde'];
} catch(exception $e){
	echo "problema ao conectar com o banco <br>";
}

$db = ['Necessita da esfera', 'Necessita de limpeza', 'Necessita troca do cabo ou conector', 'Quebrado ou inutilizado'];
?>



<form method="post">
	<label><?php echo $r['qtde'] + 1; ?>º Mouse - Descrição</label> <br/>
	<select name="defeito">
		<option value="Necessita da esfera">Necessita da esfera </option>
		<option value="Necessita de limpeza">Necessita de limpeza </option>
		<option value="Necessita troca do cabo ou conector">Necessita troca do cabo ou conector </option>
		<option value="Quebrado ou inutilizado"> Quebrado ou inutilizado</option>
	</select>
	<br>
	<input type="submit">


	<br/>
	<br/>
	<br/>
	<br/>
	
</form>

<form method="post">
<button type="submit" name="relatorio">Exibir relatorio </button>
</form>


<?php
//echo $_POST['defeito'];
if(!empty($_POST['defeito'])){
	$defeito = filter_input(INPUT_POST, 'defeito');

	$sql = "INSERT INTO mouse (`desc`) values (:defeito)";

	$stmt = $banco->prepare($sql);
	$stmt->bindValue(':defeito', $defeito);
	$stmt->execute();
}


if(isset($_POST['relatorio'])){
	echo "Quantidade de mouses: " . $qtde . "<br/><br/>";
	echo "<table><tr><td>Situação</td> <td>Quantidade Percentual</td> <tr>";

	for($i = 0; $i < 4; $i++){

		$sql = "SELECT COUNT(*) as um FROM mouse where `desc` = '$db[$i]'";

		$stmt = $banco->query($sql);
		$um = $stmt->fetch();
		echo "<tr> <td>" .$um['um']."</td>  <td>". porcentagem($um['um'], $qtde)." %</td></tr>";
	//	print_r($um);
	}
	echo "</table>";

}

?>