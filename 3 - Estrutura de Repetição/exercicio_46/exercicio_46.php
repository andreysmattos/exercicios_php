<?php

/*
 46 - Em uma competição de salto em distância cada atleta tem direito a cinco saltos. No final da série de saltos de cada atleta, o melhor e o pior resultados são eliminados. O seu resultado fica sendo a média dos três valores restantes. Você deve fazer um programa que receba o nome e as cinco distâncias alcançadas pelo atleta em seus saltos e depois informe a média dos saltos conforme a descrição acima informada (retirar o melhor e o pior salto e depois calcular a média). Faça uso de uma lista para armazenar os saltos. Os saltos são informados na ordem da execução, portanto não são ordenados. O programa deve ser encerrado quando não for informado o nome do atleta. A saída do programa deve ser conforme o exemplo abaixo:

 
Atleta: Rodrigo Curvêllo

Primeiro Salto: 6.5 m
Segundo Salto: 6.1 m
Terceiro Salto: 6.2 m
Quarto Salto: 5.4 m
Quinto Salto: 5.3 m

Melhor salto:  6.5 m
Pior salto: 5.3 m
Média dos demais saltos: 5.9 m

Resultado final:
Rodrigo Curvêllo: 5.9 m 
*/



?>


<form method="post">
<label id="name"> Nome </label> <br/>
<input type="text" name="name" id="name"> <br/>

<label id="salto1"> 1º Salto </label> <br/>
<input type="text" name="salto1" id="salto1"> <br/>

<label id="salto2"> 2º Salto </label> <br/>
<input type="text" name="salto2" id="salto2"> <br/>


<label id="salto3"> 3º Salto </label> <br/>
<input type="text" name="salto3" id="salto3"> <br/>


<label id="salto4"> 4º Salto </label> <br/>
<input type="text" name="salto4" id="salto4"> <br/>


<label id="salto5"> 5º Salto </label> <br/>
<input type="text" name="salto5" id="salto5"> <br/>


<input type="submit" name="enviar">

</form>

<h4>
<?php

require_once 'atleta.class.php';



if(!empty($_POST['name']) && !empty($_POST['salto1']) && !empty($_POST['salto2']) && !empty($_POST['salto3']) && !empty($_POST['salto4']) && !empty($_POST['salto5'])){



	$nome = filter_input(INPUT_POST, 'name');
	$saltos = [];

for($i = 1; $i <= 5; $i++){
	$saltos [] = filter_input(INPUT_POST, 'salto'.$i);
}


$atleta = new Atleta($nome, $saltos);

$atleta->apresentar();



}



?>

</h4>