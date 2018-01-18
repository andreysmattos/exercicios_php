<?php /* 37 - Uma academia deseja fazer um senso entre seus clientes para descobrir o mais alto, o mais baixo, o mais gordo e o mais magro, para isto você deve fazer um programa que pergunte a cada um dos clientes da academia seu código, sua altura e seu peso. O final da digitação de dados deve ser dada quando o usuário digitar 0 (zero) no campo código. Ao encerrar o programa também deve ser informados os códigos e valores do clente mais alto, do mais baixo, do mais gordo e do mais magro, além da média das alturas e dos pesos dos clientes */?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>



<script>
var input = 1;
function mais(campo) {
var nova = document.getElementById("aqui");
var novadiv = document.createElement("div");
var nomediv = "div";
novadiv.innerHTML = "<br/> Pessoa "+input+": <br/>Altura:  <input type='number' name='alt"+input+"' value='' />";
nova.appendChild(novadiv);


$(document).ready(function() {
    $("input.enviar").val(input);
  });

}


function mais2(campo) {
var nova = document.getElementById("aqui");
var novadiv = document.createElement("div");
var nomediv = "div";
novadiv.innerHTML = "Peso:  <input type='number' name='peso"+input+"' value='' /> <br/><br/>";
nova.appendChild(novadiv);
input++;

}


</script>

<script type="text/javascript">
  
</script>

<form name="form" method="post" action="">
<input type="text" name="campo" value="" style="display: none;"/>
<input type="button" value="adicionar cliente" onClick="mais(campo.value); mais2(campo.value)" />
<div id="aqui"></div>
<input type="submit" name="btn"/>
<input style="display: none;" name="qtd" value="" class="enviar">
</form>


<?php
$peso = [];
$altura = [];
if(isset($_POST['btn'])){
	$quantidade = $_POST['qtd'];
	//echo $quantidade;
	for ($i=1; $i <= $quantidade; $i++) {
		
		 
			//echo "<br/> O I É ESSE: " . $i . "<br/>";
			$peso[] = $_POST['peso'.($i)];
			$altura[] = $_POST['alt'.($i)];
		
	}
}


if(!empty($_POST['alt'.($i-1)]) && !empty($_POST['peso'.($i-1)])){
	//peso
	$mediaPeso = array_sum($peso) / count($peso);
	$menorPeso = min($peso);
	$maiorPeso = max($peso);

	echo "A MEDIA DE PESO É: " . number_format($mediaPeso,1) . "<br/>";
	echo "O MAIOR DE PESO É: " . $maiorPeso . "<br/>";
	echo "O MENOR DE PESO É: " . $menorPeso . "<br/>";


echo "<br/>";
echo "<br/>";
	//altura
	$mediaAltura = array_sum($altura) / count($altura);
	$menorAltura = min($altura);
	$maiorAltura = max($altura);

	echo "A MEDIA DE ALTURA É: " . number_format($mediaAltura,1) . "<br/>";
	echo "O MAIOR DE ALTURA É: " . $menorAltura . "<br/>";
	echo "O MENOR DE ALTURA É: " . $maiorAltura . "<br/>";
}



?>