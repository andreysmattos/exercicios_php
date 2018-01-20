<?php
/*
19 - Uma empresa de pesquisas precisa tabular os resultados da seguinte enquete feita a um grande quantidade de organizações:

"Qual o melhor Sistema Operacional para uso em servidores?"

As possíveis respostas são:

1- Windows Server
2- Unix
3- Linux
4- Netware
5- Mac OS
6- Outro

Você foi contratado para desenvolver um programa que leia o resultado da enquete e informe ao final o resultado da mesma. O programa deverá ler os valores até ser informado o valor 0, que encerra a entrada dos dados. Não deverão ser aceitos valores além dos válidos para o programa (0 a 6). Os valores referentes a cada uma das opções devem ser armazenados num vetor. Após os dados terem sido completamente informados, o programa deverá calcular a percentual de cada um dos concorrentes e informar o vencedor da enquete. O formato da saída foi dado pela empresa, e é o seguinte:

Sistema Operacional     Votos   %
-------------------     -----   ---
Windows Server           1500   17%
Unix                     3500   40%
Linux                    3000   34%
Netware                   500    5%
Mac OS                    150    2%
Outro                     150    2%
-------------------     -----
Total                    8800

O Sistema Operacional mais votado foi o Unix, com 3500 votos, correspondendo a 40% dos votos.


*/

function por($valor, $total){
	$por = ($valor / $total) * 100;
	return number_format($por,1);
}

//echo por(20,200);

try {


	$conn = new \PDO("mysql: host=localhost; dbname=test; charset=utf8", 'root', '');
	
} catch(exception $e){
	echo "Erro na conexão com banco. <br>";
}






?>
<label>Escolhe seu voto: </label>

<form method="post">
<input type="number" max="6" min="1" name="voto">
<br>
<input type="submit">



<br>
<br>
<br>
<button type="submit" name="fim"> Encerrar votação</button>
</form>

<?php

if(!empty($_POST['voto'])){
	$voto = filter_input(INPUT_POST, 'voto');
	if($voto > 0 && $voto < 7 && is_numeric($voto)){
		switch($voto){
			case 1:
				$sql = "UPDATE so SET windows_server = windows_server + 1";
         	 break;
			case 2:
				$sql = "UPDATE so SET unix = unix+ 1";
         	 break;
			case 3:
				$sql = "UPDATE so SET linux = linux+ 1";
         	 break;
			case 4:
				$sql = "UPDATE so SET netware = netware+ 1";
         	 break;
			case 5:
				$sql = "UPDATE so SET mac_os = mac_os+ 1";
         	 break;
			case 6:
				$sql = "UPDATE so SET outro = outro+ 1";
         	 break;

		}
		$conn->query($sql);

	}
}


if(isset($_POST['fim'])){
	echo '<table><tr><th> Sistema Operacional</th><th> Votos</th>	<th> % </th></tr>';
	$valores = [];
	$sql = "SELECT * FROM so";


	//$conn->query($sql);

	$stmt = $conn->query($sql);

	$r = $stmt->fetch(PDO::FETCH_ASSOC);
	$total = 0;
	//print_r($conn->query($sql));
	foreach($r as $key => $value){
		$total += $value;
	}

	foreach($r as $key => $value){
		if($value > 0){
		echo "<tr>";
		echo "<td>". $key."</td>";
		echo "<td> ". $value ."</td>";
		echo "<td>".por($value, $total)."</td>";
		echo "</tr>";
		}

	}
	echo "</table>";

	echo "<hr>Total: " . $total . "";
	//var_dump($stmt);
		
	

	//print_r($valores);


	$sql = "UPDATE so SET windows_server = 0, unix = 0, linux = 0, netware = 0, mac_os = 0, outro = 0";
	$conn->query($sql);

}