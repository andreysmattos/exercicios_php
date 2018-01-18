<?php /* 25 - Faça um programa que faça 5 perguntas para uma pessoa sobre um crime. As perguntas são:
"Telefonou para a vítima?"
"Esteve no local do crime?"
"Mora perto da vítima?"
"Devia para a vítima?"
"Já trabalhou com a vítima?" O programa deve no final emitir uma classificação sobre a participação da pessoa no crime. Se a pessoa responder positivamente a 2 questões ela deve ser classificada como "Suspeita", entre 3 e 4 como "Cúmplice" e 5 como "Assassino". Caso contrário, ele será classificado como "Inocente". */ ?>


<form method="post" action="">
<label>Perguntas sobre o crime: </label><br/>

	<label>Telefonou para a vítima? </label> <br/>
	<label for="q1s"> <input type="radio" name="q1" value="1" id="q1s"> Sim </label><br/>
	<label for="q1n"> <input type="radio" name="q1" value="0" id="q1n"> Não </label> <br/>
<br/>
	<label>Esteve no local do crime? </label> <br/>
	<label for="q2s"> <input type="radio" name="q2" value="1" id="q2s"> Sim </label><br/>
	<label for="q2n"> <input type="radio" name="q2" value="0" id="q2n"> Não </label> <br/>
<br/>
	<label>Mora perto da vítima? </label> <br/>
	<label for="q3s"> <input type="radio" name="q3" value="1" id="q3s"> Sim </label><br/>
	<label for="q3n"> <input type="radio" name="q3" value="0" id="q3n"> Não </label> <br/>
<br/>
	<label>Devia para a vítima? </label> <br/>
	<label for="q4s"> <input type="radio" name="q4" value="1" id="q4s"> Sim </label><br/>
	<label for="q4n"> <input type="radio" name="q4" value="0" id="q4n"> Não </label> <br/>
<br/>
	<label>Já trabalhou com a vítima? </label> <br/>
	<label for="q5s"> <input type="radio" name="q5" value="1" id="q5s"> Sim <br/> </label>
	<label for="q5n"> <input type="radio" name="q5" value="0" id="q5n"> Não </label> <br/>

<br/>
<br/>
<input type="submit" name="">



</form>



<?php

if(isset($_POST['q1']) && isset($_POST['q2']) && isset($_POST['q3']) && isset($_POST['q4']) && isset($_POST['q5'])){

	$resultado = $_POST['q1'] + $_POST['q2'] + $_POST['q3'] + $_POST['q4'] + $_POST['q5'];
	
	if($resultado == 5){
		echo "Assassino.";
	} elseif($resultado >= 3){
		echo "Cúmplice.";
	} elseif($resultado == 2){
		echo "Suspeita.";
	} else{
		echo "Inocente.";
	}
}

?>