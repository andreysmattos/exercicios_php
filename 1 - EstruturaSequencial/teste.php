<?php

function tiraResto($valor){
	$modulo = $valor % 10;
	return $modulo;
}




echo tiraResto(1.55);

?>