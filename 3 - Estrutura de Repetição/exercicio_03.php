<?php /* 3  - Faça um programa que leia e valide as seguintes informações:
Nome: maior que 3 caracteres;
Idade: entre 0 e 150;
Salário: maior que zero;
Sexo: 'f' ou 'm';
Estado Civil: 's', 'c', 'v', 'd'; */ ?>
<?php

$nome1 = true;
$idade1 = true;
$sexo1 = true;
$salario1 = true;
$estado1 = true;

if(!empty($_POST['nome']) && !empty($_POST['idade']) && !empty($_POST['salario']) && !empty($_POST['sexo']) && !empty($_POST['estado'])){

	$nome = $_POST['nome'];
	$idade = $_POST['idade'];
	$salario = $_POST['salario'];
	$sexo = strtolower($_POST['sexo']);
	$estado = strtolower($_POST['estado']);

	//print_r($_POST);

	if(strlen($nome) <= 3){
		$nome1 = false;
	}

	if($idade < 0 || $idade >= 150){
		$idade1 = false;
	}

	if($salario < 0){
		$salario1 = false;
	}

	if($sexo != 'f' && $sexo != "m"){
		$sexo1 = false;
	}

	//'s', 'c', 'v', 'd';
	if($estado != 's' && $sexo != 'c' && $sexo != 'v' && $sexo != 'd'){
		$estado1 = false;
	}

if(!$nome1){
	echo "<font color='red'> <h4> Formulário inválido, corrija os campos. </h4> </font>";
}

}

?>



<form method="post" action="">
	<label for="nome">Nome</label> <br/>
	<input type="text" name="nome" id="nome">



	<input type="text" disabled="" value="<?php echo (($nome1) ? '' : 'Maior que 3 caracteres');?>" style="display: <?php echo (($nome1) ? 'none;' : 'block;');?>;"> <br/>
	

	<label for="idade">Idade</label> <br/>
	<input type="number" name="idade" id="idade"> 



	<input type="text" disabled="" value="<?php echo (($idade1) ? '' : 'entre 0 e 150');?>" style="display: <?php echo (($idade1) ? 'none;' : 'block;');?>;"><br/>
	

	<label for="salario">Salário</label> <br/>
	<input type="number" name="salario" id="salario"> 



	<input type="text" disabled="" value="<?php echo (($salario1) ? '' : 'Maior que ZERO.');?>" style="display: <?php echo (($salario1) ? 'none;' : 'block;');?>;"><br/>
	

	<label for="sexo">Sexo</label> <br/>
	<input type="text" name="sexo" id="sexo" placeholder="f ou m"> 



	<input type="text" disabled="" value="<?php echo (($sexo1) ? '' : 'f ou m');?>" style="display: <?php echo (($sexo1) ? 'none;' : 'block;');?>;"><br/>
	

	<label for="estado">Estado Civil</label> <br/>
	<input type="text" name="estado" id="estado" placeholder="s, c, v ou d"> 



	<input type="text" disabled="" value="<?php echo (($estado1) ? '' : 's, c, v ou d');?>" style="display: <?php echo (($estado1) ? 'none;' : 'block;');?>;"><br/>
<br/

>
	<input type="submit" value="Verificar">


</form>



