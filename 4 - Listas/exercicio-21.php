<?php
/*
21 - Faça um programa que carregue uma lista com os modelos de cinco carros (exemplo de modelos: FUSCA, GOL, VECTRA etc). Carregue uma outra lista com o consumo desses carros, isto é, quantos quilômetros cada um desses carros faz com um litro de combustível. Calcule e mostre:

    O modelo do carro mais econômico;
    Quantos litros de combustível cada um dos carros cadastrados consome para percorrer uma distância de 1000 quilômetros e quanto isto custará, considerando um que a gasolina custe R$ 2,25 o litro. Abaixo segue uma tela de exemplo. O disposição das informações deve ser o mais próxima possível ao exemplo. Os dados são fictícios e podem mudar a cada execução do programa. 

Comparativo de Consumo de Combustível

Veículo 1
Nome: fusca
Km por litro: 7
Veículo 2
Nome: gol
Km por litro: 10
Veículo 3
Nome: uno
Km por litro: 12.5
Veículo 4
Nome: Vectra
Km por litro: 9
Veículo 5
Nome: Peugeout
Km por litro: 14.5

Relatório Final
 1 - fusca           -    7.0 -  142.9 litros - R$ 321.43
 2 - gol             -   10.0 -  100.0 litros - R$ 225.00
 3 - uno             -   12.5 -   80.0 litros - R$ 180.00
 4 - vectra          -    9.0 -  111.1 litros - R$ 250.00
 5 - peugeout        -   14.5 -   69.0 litros - R$ 155.17
O menor consumo é do peugeout.

*/

?>



<form method="post">
	<label> Veiculo: </label> <input type="text" name="veiculo[1]"> <br>
	<label> Km por litro: </label> <input type="number" name="kml[1]"> <hr><br>

		<label> Veiculo: </label> <input type="text" name="veiculo[2]"> <br>
	<label> Km por litro: </label> <input type="number" name="kml[2]"> <hr><br>

		<label> Veiculo: </label> <input type="text" name="veiculo[3]"> <br>
	<label> Km por litro: </label> <input type="number" name="kml[3]"> <hr><br>

		<label> Veiculo: </label> <input type="text" name="veiculo[4]"> <br>
	<label> Km por litro: </label> <input type="number" name="kml[4]"> <hr><br>

		<label> Veiculo: </label> <input type="text" name="veiculo[5]"> <br>
	<label> Km por litro: </label> <input type="number" name="kml[5]"> <hr><br>
	<input type="submit" name="xd">

</form>


<?php
if(isset($_POST['veiculo']) && isset($_POST['kml'])){
	$veiculos = $_POST['veiculo'];
	$kml = $_POST['kml'];

	$economico = array_search(min($kml), $kml); // $veiculos[$economico];
	$i = 1;
	echo (isset($_POST['xd'])) ? "Relatório Final<br>" : '';
	foreach($veiculos as $key=> $carro){
		if(is_numeric($kml[$key])){
		echo $i . " - " . $carro ." - ". $kml[$key] . " - " . number_format(1000 / $kml[$key],2) . " litros - " . "R$: " . number_format((1000 / $kml[$key]) * 2.25,2) . "<br/>";
		$i++;
		} else {
			die();
		}
	}
	
	echo "O menor consumo é do " . $veiculos[$economico] . "<br>";
	

}

