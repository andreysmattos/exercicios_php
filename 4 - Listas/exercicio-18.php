<?php
/*
18 - Uma grande emissora de televisão quer fazer uma enquete entre os seus telespectadores para saber qual o melhor jogador após cada jogo. Para isto, faz-se necessário o desenvolvimento de um programa, que será utilizado pelas telefonistas, para a computação dos votos. Sua equipe foi contratada para desenvolver este programa, utilizando a linguagem de programação PHP. Para computar cada voto, a telefonista digitará um número, entre 1 e 23, correspondente ao número da camisa do jogador. Um número de jogador igual zero, indica que a votação foi encerrada. Se um número inválido for digitado, o programa deve ignorá-lo, mostrando uma breve mensagem de aviso, e voltando a pedir outro número. Após o final da votação, o programa deverá exibir:

    O total de votos computados;
    Os númeos e respectivos votos de todos os jogadores que receberam votos;
    O percentual de votos de cada um destes jogadores;
    O número do jogador escolhido como o melhor jogador da partida, juntamente com o número de votos e o percentual de votos dados a ele.
        Observe que os votos inválidos e o zero final não devem ser computados como votos. O resultado aparece ordenado pelo número do jogador. O programa deve fazer uso de arrays. 


        O programa deverá executar o cálculo do percentual de cada jogador através de uma função. Esta função receberá dois parâmetros: o número de votos de um jogador e o total de votos. A função calculará o percentual e retornará o valor calculado. Abaixo segue uma tela de exemplo. O disposição das informações deve ser o mais próxima possível ao exemplo.



         Os dados são fictícios e podem mudar a cada execução do programa. Ao final, o programa deve ainda gravar os dados referentes ao resultado da votação em um arquivo texto no disco, obedecendo a mesma disposição apresentada na tela. 

Enquete: Quem foi o melhor jogador?

Número do jogador (0=fim): 9
Número do jogador (0=fim): 10
Número do jogador (0=fim): 9
Número do jogador (0=fim): 10
Número do jogador (0=fim): 11
Número do jogador (0=fim): 10
Número do jogador (0=fim): 50
Informe um valor entre 1 e 23 ou 0 para sair!
Número do jogador (0=fim): 9
Número do jogador (0=fim): 9
Número do jogador (0=fim): 0

Resultado da votação:

Foram computados 8 votos.

Jogador Votos           %
9               4               50,0%
10              3               37,5%
11              1               12,5%
O melhor jogador foi o número 9, com 4 votos, correspondendo a 50% do total de votos.

*/

/* SQL query 

create table votos (
    um int,
    dois int,
    tres int,
    quatro int,
    cinco int,
    seis int,
    sete int,
    oito int,
    nove int,
    dez int,
    onze int,
    doze int,
    treze int,
    catorze int,
    quinze int,
    dezesseis int,
    dezessete int,
    dezoito int,
    dezenove int,
    vinte int,
    vinte_e_um int,
    vinte_e_dois int,
    vinte_e_tres int
    
);

*/
function porcentagem($votos_jogador, $total_votos){
	$aux = ($votos_jogador * 100) / $total_votos;
	return number_format($aux,1);
}

//echo porcentagem(5,10);

?>


<script type="text/javascript">
	function confirmar(){

if(confirm("Tem certeza que deseja encerrar a votação? Isso apagara todos os registros!")){
document.getElementById('x').submit();
}

} 
</script>
<form method="get">
<label> Informe o voto: </label> <br/>
<input type="number" max="23" min="0" name="voto">
<input type="submit" value="Computar voto">
<br/>
<br/><br/>
<br/><br/>
<br/><br/>
<br/>

</form>

<form method="post" id="x" name='xd'>
	<input type="hidden" value="1" name="btn">
<input type="button" name="x" onclick="confirmar();" value="Encerrar votação">
</form>


<?php

try{
		$conn = new \PDO("mysql:host=localhost; dbname=votos; charset=utf8", 'root', '');
	} catch(PDOException $e){
		echo 'Erro na conexão com banco de dados. <hr>';
		echo 'Verificar a linha ' . $e->getLine() . ' no arquivo ' . $e->getFile();
	}




	if(isset($_POST['btn'])){
	/*estatisticas aki 

	esultado da votação:

Foram computados 8 votos.

Jogador 		Votos         	 %
9               4               50,0%
10              3               37,5%
11              1               12,5%
O melhor jogador foi o número 9, com 4 votos, correspondendo a 50% do total de votos.


*/

	$sql = "SELECT * FROM votos";
	$stmt = $conn->query($sql);

	$r = $stmt->fetch(PDO::FETCH_ASSOC);
	$valida= true;
	$lista = [];

	foreach($r as $key =>$voto){
		if($voto > 0){
			$lista[$key] = $voto;
			$valida = false;
		}
		
	}

	if($valida){
		die();
	}

	//print_r($lista);
	echo "<hr>";
	echo "Resultado da votação:<br/>";
	echo "Foram computados ".array_sum($lista)." votos. <br/>";
	echo "<table> <tr> <th> Jogador</th> <th> Votos</th> <th> % </th> </tr>";
	
	foreach($lista as $key => $value){
		echo "<tr>";
		echo "<td>" . $key."</td><td>" . $value . "</td><td>". porcentagem($value, array_sum($lista))."% </td> ";
		echo "</tr>";
	}
	echo "</table>";

	$count = 0;
	foreach($lista as $valor){
		if(max($lista) == $valor){
			$count += 1;
		}
	}

	if($count > 1){
		echo "<h4>EMPATE!, refaça a votação.<h4><br/>";
	} else {

		$num = array_search(max($lista), $lista);

	echo '<h4>O melhor jogador foi o número '.$num.', com '.$lista[$num].' votos, correspondendo a '.porcentagem($lista[$num], array_sum($lista)).'% do total de votos.</h4>';


	}

	



	$sql = "TRUNCATE TABLE votos";
	$conn->query($sql);

	$sql = "INSERT INTO `votos` (`um`, `dois`, `tres`, `quatro`, `cinco`, `seis`, `sete`, `oito`, `nove`, `dez`, `onze`, `doze`, `treze`, `catorze`, `quinze`, `dezesseis`, `dezessete`, `dezoito`, `dezenove`, `vinte`, `vinte_e_um`, `vinte_e_dois`, `vinte_e_tres`) VALUES ('0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0')";
	$conn->query($sql);

	die();
}






$voto = filter_input(INPUT_GET, 'voto', FILTER_VALIDATE_INT);


if($voto > 0  && $voto <= 23 && is_int($voto) && !empty($_GET['voto'])){
	

	switch ($voto) {
		case 1:
			$num = 'um';
			break;
		case 2:
			$num = 'dois';
			break;
		case 3:
			$num = 'tres';
			break;
		case 4:
			$num = 'quatro';
			break;
		case 5:
			$num = 'cinco ';
			break;
		case 6:
			$num = 'seis';
			break;
		case 7:
			$num = 'sete';
			break;
		case 8:
			$num = 'oito ';
			break;
		case 9:
			$num = 'nove';
			break;
		case 10:
			$num = 'dez';
			break;
		case 11:
			$num = 'onze';
			break;
		case 12:
			$num = 'doze';
			break;
		case 1:
			$num = 'um';
			break;
		case 1:
			$num = 'um';
			break;
		case 13:
			$num = 'treze';
			break;
		case 14:
			$num = 'catorze';
			break;
		case 15:
			$num = 'quinze';
			break;
		case 16:
			$num = 'dezesseis';
			break;
		case 17:
			$num = 'dezessete';
			break;
		case 18:
			$num = 'dezoito';
			break;
		case 19:
			$num = 'dezenove';
			break;
		case 20:
			$num = 'vinte';
			break;
		case 21:
			$num = 'vinte_e_um';
			break;
		case 22:
			$num = ' vinte_e_dois';
			break;
		case 23:
			$num = 'vinte_e_tres';
			break;
		
		default:
			die();
			break;
	}

	$sql = "UPDATE votos set $num = $num+1";

	$conn->query($sql);
}






?>