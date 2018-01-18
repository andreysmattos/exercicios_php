<?php /* Faça um Programa que peça o raio de um círculo, calcule e mostre sua área. */ ?>

<style type="text/css">
	.circ {
		width: 206px;
		height: 199px;
		background-image: url("img/circulo1.JPG");
		text-align: center;
		vertical-align: middle;
		display: table-cell;
		font-size: 1.5em;
	}

</style>




<form method="get" >
	<label for="raio"> Digite o raio do circulo: </label>
	<input type="number" name="raio" id="raio">
	<br/>
	<input type="submit">
</form>
<br/>
<br/>
<?php
$area = 0;
if(!empty($_GET['raio'])){
	$area = 3.14 * ($_GET['raio'] ** 2); 
}



?>
<div class="circ">
<span class="text"> Área: <br/> <?php echo $area . 'm²';?></span>
</div>


