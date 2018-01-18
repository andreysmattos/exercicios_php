<?php  /* 7 - Faça um Programa que calcule a área de um quadrado, em seguida mostre o dobro desta área para o usuário. */ ?>


<style type="text/css">
	.form {
		width: 200px;
		color: blue;
	}
</style>

<form methd="get" action=""> 
	<input type="text" name="lado" placeholder="Digite a altura do quadrado" class="form">
	<br/>
	<input type="submit" class="form"> 
	<br/>

	<?php
				$area = 'Informe um valor númerico.';
				$dobroArea = 'Informe um valor númerico.';

		if(!empty($_GET['lado'])){
			if(is_numeric($_GET['lado'])){
				$area = 'Área do quadrado: ' . $_GET['lado'] * 2;
				$dobroArea = 'Dobro da área: ' . ($_GET['lado'] * 2) * 2;
			}
		}

	?>

	<input type="text" readonly="" class="form">
	<br/>
	<input type="text" disabled="" class="form" value="<?php echo $area; ?>">
	<br/>
	<input type="text" disabled="" class="form" value="<?php echo $dobroArea; ?>">
</fomr>