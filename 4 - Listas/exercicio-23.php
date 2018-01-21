<?php
/*
23 - A ACME Inc., uma empresa de 500 funcionários, está tendo problemas de espaço em disco no seu servidor de arquivos. Para tentar resolver este problema, o Administrador de Rede precisa saber qual o espaço ocupado pelos usuários, e identificar os usuários com maior espaço ocupado. Através de um programa, baixado da Internet, ele conseguiu gerar o seguinte arquivo, chamado "usuarios.txt":

alexandre       456123789
anderson        1245698456
antonio         123456456
carlos          91257581
cesar           987458
rosemary        789456125

Neste arquivo, o nome do usuário possui 15 caracteres. A partir deste arquivo, você deve criar um programa que gere um relatório, chamado "relatório.txt", no seguinte formato:





ACME Inc.               Uso do espaço em disco pelos usuários
------------------------------------------------------------------------
Nr.  Usuário        Espaço utilizado     % do uso

1    alexandre       434,99 MB             16,85%
2    anderson       1187,99 MB             46,02%
3    antonio         117,73 MB              4,56%
4    carlos           87,03 MB              3,37%
5    cesar             0,94 MB              0,04%
6    rosemary        752,88 MB             29,16%

Espaço total ocupado: 2581,57 MB
Espaço médio ocupado: 430,26 MB

O arquivo de entrada deve ser lido uma única vez, e os dados armazenados em memória, caso sejam necessários, de forma a agilizar a execução do programa. A conversão da espaço ocupado em disco, de bytes para megabytes deverá ser feita através de uma função separada, que será chamada pelo programa principal. O cálculo do percentual de uso também deverá ser feito através de uma função, que será chamada pelo programa principal.
*/
function MB($byte){
	return number_format($byte / 1048576,1);
}

function porcentagem($valor, $total){
	return number_format(($valor / $total) * 100,2);
}

$nome = [];
$byte = [];

$ponteiro = fopen('ex_23.txt', 'r');

while(!feof($ponteiro)){
	$linha = fgets($ponteiro);
	$nome [] = substr($linha, 0, 15);
	$byte [] = (int) substr($linha, 15);
	//echo $linha . "<br/>";
}



echo "<table style='border: solid 1px'> <tr> <th>Nr.</th><th>Usuário</th><th>Espaço utilizado</th> <th>% do uso</th> </tr>";
$c = 0;

for($i = 0; $i < 6; $i++){
	echo "<tr>";
	echo "<td> ".$i."</td>";
	echo "<td> ".$nome[$i]."</td>";
	echo "<td> ".MB($byte[$i])."</td>";
	echo "<td> ".porcentagem($byte[$i], array_sum($byte))."% </td>";
	echo "</tr>";
}

echo "</table><br/>Espaço total ocupado: ".MB(array_sum($byte))." MB <br/>";
echo "Espaço médio ocupado: ".MB(array_sum($byte) / count($byte))." MB";
//print_r($byte);

?>