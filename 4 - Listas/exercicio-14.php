<?php
/*
14 - Utilizando listas faça um programa que faça 5 perguntas para uma pessoa sobre um crime. As perguntas são:

    "Telefonou para a vítima?"
    "Esteve no local do crime?"
    "Mora perto da vítima?"
    "Devia para a vítima?"
    "Já trabalhou com a vítima?" O programa deve no final emitir uma classificação sobre a participação da pessoa no crime.

     Se a pessoa responder positivamente a 2 questões ela deve ser classificada como "Suspeita", entre 3 e 4 como "Cúmplice" e 5 como "Assassino". Caso contrário, ele será classificado como "Inocente". 

   */


   ?>

<form method="post">
	<label> Telefonou para a vítima? </label> <br/>
	<select name="perguntas[]">
		<option value="1"> Sim </option>
		<option value="0"> Não </option>
	</select>
	<hr>
<label> Esteve no local do crime? </label> <br/>
	<select name="perguntas[]">
		<option value="1"> Sim </option>
		<option value="0"> Não </option>
	</select>
	<hr>
<label> Mora perto da vítima? </label> <br/>
	<select name="perguntas[]">
		<option value="1"> Sim </option>
		<option value="0"> Não </option>
	</select>
	<hr>
<label> Devia para a vítima? </label> <br/>
	<select name="perguntas[]">
		<option value="1"> Sim </option>
		<option value="0"> Não </option>
	</select>
	<hr>
<label> Já trabalhou com a vítima? </label> <br/>
	<select name="perguntas[]">
		<option value="1"> Sim </option>
		<option value="0"> Não </option>
	</select>
	<hr>

	<input type="submit">
</form>	


<?php


if(isset($_POST['perguntas'])){
	//echo "Xd";
	$pontos = array_sum($_POST['perguntas']);

	if($pontos == 2){
		echo "<p> Você é um suspeito.</p>";
	} else if($pontos == 5){
		echo "<p> Você é um Assassino.</p>";		
	} else if($pontos > 2){
		echo "<p> Você é Cúmplice.</p>";
	} else {
		echo "<p> Você é inocente.</p>";
	}
}
