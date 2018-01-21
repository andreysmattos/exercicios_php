<?php
/*
44 - Em uma eleição presidencial existem quatro candidatos. Os votos são informados por meio de código. Os códigos utilizados são:
1 , 2, 3, 4  - Votos para os respectivos candidatos 
(você deve montar a tabela ex: 1 - Jose/ 2- João/etc)
5 - Voto Nulo
6 - Voto em Branco
Faça um programa que calcule e mostre:
O total de votos para cada candidato;
O total de votos nulos;
O total de votos em branco;
A percentagem de votos nulos sobre o total de votos;
A percentagem de votos em branco sobre o total de votos. Para finalizar o conjunto de votos tem-se o valor zero.
*/





?>




<form method="post">
<label> Candidato 1 - José </label> <button name="cand1"> Votar 1</button> <br/> <br/>
<label> Candidato 2 - João</label> <button name="cand2"> Votar 1</button> <br/> <br/>
<label> Candidato 3 - Marcos</label> <button name="cand3"> Votar 1</button> <br/> <br/>
<label> Candidato 4 - Isabele</label> <button name="cand4"> Votar 1</button> <br/> <br/>
<br/> <br/>
<label> Nulo </label> <button name="candn"> Votar 5</button> <br/> <br/>
<label> Branco </label> <button name="candb"> Votar 6</button> <br/> <br/>
<label> Resetar votação: </label> <button name="reset"> Resetar</button> <br/> <br/>
</form>



<?php
session_start();
if(isset($_POST['reset'])){
	session_destroy();
	exit();
}


$_SESSION['cand1'] = (isset($_SESSION['cand1']) ? $_SESSION['cand1'] : 0);
$_SESSION['cand2'] = (isset($_SESSION['cand2']) ? $_SESSION['cand2'] : 0);
$_SESSION['cand3'] = (isset($_SESSION['cand3']) ? $_SESSION['cand3'] : 0);
$_SESSION['cand4'] = (isset($_SESSION['cand4']) ? $_SESSION['cand4'] : 0);

$_SESSION['candn'] = (isset($_SESSION['candn']) ? $_SESSION['candn'] : 0);
$_SESSION['candb'] = (isset($_SESSION['candb']) ? $_SESSION['candb'] : 0);

if(isset($_POST['cand1'])){
	$_SESSION['cand1'] = (isset($_SESSION['cand1']) ? ($_SESSION['cand1'] + 1) : 1);
}

if(isset($_POST['cand2'])){
	$_SESSION['cand2'] = (isset($_SESSION['cand2']) ? ($_SESSION['cand2'] + 1) : 1);
}

if(isset($_POST['cand3'])){
	$_SESSION['cand3'] = (isset($_SESSION['cand3']) ? ($_SESSION['cand3'] + 1) : 1);
}

if(isset($_POST['cand4'])){
	$_SESSION['cand4'] = (isset($_SESSION['cand4']) ? ($_SESSION['cand4'] + 1) : 1);
}

if(isset($_POST['candn'])){
	$_SESSION['candn'] = (isset($_SESSION['candn']) ? ($_SESSION['candn'] + 1) : 1);
}

if(isset($_POST['candb'])){
	$_SESSION['candb'] = (isset($_SESSION['candb']) ? ($_SESSION['candb'] + 1) : 1);
}

$total_votos = $_SESSION['cand1'] + $_SESSION['cand2'] + $_SESSION['cand3'] + $_SESSION['cand4'] + $_SESSION['candn'] + $_SESSION['candb'];

echo "<br/>  <br/>";
echo "O candidato  1 - José recebeu : " . $_SESSION['cand1'] ." votos.<br/>";
echo "O candidato 2 - João recebeu : " . $_SESSION['cand2'] ." votos.<br/>";
echo "O candidato 3 - Marcos recebeu : " . $_SESSION['cand3'] ." votos.<br/>";
echo "O candidato 4 - Isabele recebeu : " . $_SESSION['cand4'] ." votos.<br/>";
echo "Um total de  : " . $_SESSION['candn'] ." votos nulos.<br/>";
echo "E um total de : " . $_SESSION['candb'] ." votos em branco.<br/>";
echo "<br/>";
echo "Total de votos: " . $total_votos;

echo "<br/>A percentagem de votos nulos sobre o total de votos é de: " . number_format(($_SESSION['candn']*100) / $total_votos, 2) . "%"; 

echo "<br/>A percentagem de votos em branco sobre o total de votos é de: " . number_format(($_SESSION['candb']*100) / $total_votos, 2) . "%"; 

?>


