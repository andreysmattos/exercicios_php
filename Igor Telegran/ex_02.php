<!--Criar uma variável informando se o usuário pode tirar carteira de habilitação. se a sua idade for maior de 18 imprimir "maior de idade" e fazer a variável da habilitação receber "true", se não, imprimir "menor de idade" e fazer a variável da habilitação receber false -->



<form method="get">
<label for="idade"> Verificação de idade: </label> <br/>
<input type="number" name="idade" placeholder="Idade" id="idade">
<button type="submit"> Confirmar</button>
</form>

<?php 
$habilitacao = null;
$idade = $_GET['idade'];

if($idade >= 18){
	echo "Maior de idade.";
	$habilitacao = true;
} elseif($idade < 18){
	$habilitacao = false;
	echo "Menor de idade.";
}

?>