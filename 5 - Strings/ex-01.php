
<meta charset="utf-8">
<?php

/*
1 - Tamanho de strings. Faça um programa que leia 2 strings e informe o conteúdo delas seguido do seu comprimento. Informe também se as duas strings possuem o mesmo comprimento e são iguais ou diferentes no conteúdo.

    Compara duas strings
    String 1: Brasil Hexa 2006
    String 2: Brasil! Hexa 2006!
    Tamanho de "Brasil Hexa 2006": 16 caracteres
    Tamanho de "Brasil! Hexa 2006!": 18 caracteres
    As duas strings são de tamanhos diferentes.
    As duas strings possuem conteúdo diferente.

*/


  function strings($s1, $s2){
  	$tamanho1 = strlen($s1);
  	$tamanho2 = strlen($s2);

  	echo "Tamanho de \"" . $s1 . "\": " . $tamanho1 . " caracteres. <br/>";
  	echo "Tamanho de \"" . $s2 . "\": " . $tamanho2 . " caracteres. <br/>";

  	echo ($tamanho1 == $tamanho2) ? "As duas strings são de tamanhos iguais <br/>" : "As duas strings são de tamanhos diferentes. <br/>";

  	echo ($s1 == $s2) ? "As duas strings possuem conteúdo iguais <br/>" : "As duas strings possuem conteúdo diferentes. <br/>";

  }

  ?>


  <form method="post">
  	<label> Texto 1:</label> <input type="text" name="s1"> <br/>
  	<label> Texto 2:</label> <input type="text" name="s2"> <br/>
  	<input type="submit">
  </form>

  <?php
  if(!empty($_POST['s1']) && !empty($_POST['s2'])){
  	$s1 = filter_input(INPUT_POST, 's1', FILTER_SANITIZE_SPECIAL_CHARS);
  	$s2 = filter_input(INPUT_POST, 's2', FILTER_SANITIZE_SPECIAL_CHARS);

  	strings($s1, $s2);
  }