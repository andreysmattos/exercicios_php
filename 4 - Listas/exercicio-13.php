<?php
/*
13 - Faça um programa que receba a temperatura média de cada mês do ano e armazene-as em uma lista. Após isto, calcule a média anual das temperaturas e mostre todas as temperaturas acima da média anual, e em que mês elas ocorreram (mostrar o mês por extenso: 1 – Janeiro, 2 – Fevereiro, . . . ).
*/

?>


<form method="post">
	<h4> Informe a temperatura média de cada més: </h4>
	<label> Janeiro </label>
	<input type="number" name="mes[]"> <br/>
<label> Fevereiro </label>
	<input type="number" name="mes[]"> <br/>
<label> Março </label>
	<input type="number" name="mes[]"> <br/>
<label> Abril </label>
	<input type="number" name="mes[]"> <br/>
<label> Maio </label>
	<input type="number" name="mes[]"> <br/>
<label> Junho </label>
	<input type="number" name="mes[]"> <br/>
<label> Julho </label>
	<input type="number" name="mes[]"> <br/>
<label> Agosto </label>
	<input type="number" name="mes[]"> <br/>
<label> Setembro </label>
	<input type="number" name="mes[]"> <br/>
<label> Outubro </label>
	<input type="number" name="mes[]"> <br/>
<label> Novembro </label>
	<input type="number" name="mes[]"> <br/>
<label> Dezembro </label>
	<input type="number" name="mes[]"> <br/>

	<input type="submit">	
</form>


<?php

if(isset($_POST['mes'])){
	$media = array_sum($_POST['mes']) / count($_POST['mes']);
	foreach($_POST['mes'] as $key=>$mes){
		if($mes > $media){
			switch($key){
				case '0':
					echo ($key+1) ." - ". "Janeiro - " . $mes . "ºC <br/>" ;
				break;

				case '1':
					echo ($key+1) ." - ". "Fevereiro - " . $mes . "ºC <br/>" ;
				break;

				case '2':
					echo ($key+1) ." - ". "Março - " . $mes . "ºC <br/>" ;
				break;

				case '3':
					echo ($key+1) ." - ". "Abril - " . $mes . "ºC <br/>" ;
				break;

				case '4':
					echo ($key+1) ." - ". "Maio - " . $mes . "ºC <br/>" ;
				break;

				case '5':
					echo ($key+1) ." - ". "Junho - " . $mes . "ºC <br/>" ;
				break;

				case '6':
					echo ($key+1) ." - ". "Julho - " . $mes . "ºC <br/>" ;
				break;

				case '7':
					echo ($key+1) ." - ". "Agosto - " . $mes . "ºC <br/>" ;
				break;

				case '8':
					echo ($key+1) ." - ". "Setembro - " . $mes . "ºC <br/>" ;
				break;

				case '9':
					echo ($key+1) ." - ". "Outubro - " . $mes . "ºC <br/>" ;
				break;

				case '10':
					echo ($key+1) ." - ". "Novembro - " . $mes . "ºC <br/>" ;
				break;

				case '11':
					echo ($key+1) ." - ". "Dezembro - " . $mes . "ºC <br/>" ;
				break;
			}			
		}
	}
}