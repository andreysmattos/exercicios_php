<?php /* 14 - João Papo-de-Pescador, homem de bem, comprou um microcomputador para controlar o rendimento diário de seu trabalho. Toda vez que ele traz um peso de peixes maior que o estabelecido pelo regulamento de pesca do estado de São Paulo (50 quilos) deve pagar uma multa de R$ 4,00 por quilo excedente. João precisa que você faça um programa que leia a variável peso (peso de peixes) e verifique se há excesso. Se houver, gravar na variável excesso e na variável multa o valor da multa que João deverá pagar. Caso contrário mostrar tais variáveis com o conteúdo ZERO. */ ?>

<?php
$execesso = false;

if(!empty($_GET['peixe']) && is_numeric($_GET['peixe'])){


	if($_GET['peixe'] > 50){
		$execesso = true;
		$multa = ($_GET['peixe'] - 50) * 4;
	}
}


?>

<form method="get" action="" style="margin-left: 40%; margin-top: 150px;">

	<input type="number" name="peixe" id="peixe" placeholder="Peso Peixe"> <br/>
	<input type="submit" style="width: 173px;"><br/><br/>
	<input type="text" disabled="" value="<?php echo ($execesso ? 'Excedeu' : 'Não exceceu');?>"><br/>
	<input type="text" readonly="" value="R$: <?php echo (empty($multa) ? 0 : $multa);?>,00">

</form>

