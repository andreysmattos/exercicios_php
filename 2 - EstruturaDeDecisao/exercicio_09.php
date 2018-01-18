<?php /* 9 - Faça um Programa que leia três números e mostre-os em ordem decrescente. */ 
if(!empty($_GET['num1']) && !empty($_GET['num2']) && !empty($_GET['num3'])){
	$org = array();
	$num1 = $_GET['num1'];
	$num2 = $_GET['num2'];
	$num3 = $_GET['num3'];
	array_push($org, $num1);
	array_push($org, $num2);
	array_push($org, $num3);
	rsort($org);
	function mostrar_array($org){
		echo "Os valores foram ordenados em ordem decrescente. <br/>";
	foreach ($org as $key => $value) {
		echo 'Numero ' . ($key+1) . ': ' . $value . '<br/>';
	}
	}
}
?>
<form method="get" action="">
<label> Digite três valores: </label><br/>
<input type="number" name="num1">
<input type="number" name="num2">
<input type="number" name="num3">
<br/>
<input type="submit" value="Enviar">
<form>
<br/>
<?php if(!empty($org)){mostrar_array($org);} ?>


