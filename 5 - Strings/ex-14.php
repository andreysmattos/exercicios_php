<?php
/*
14 - Leet spek generator. Leet é uma forma de se escrever o alfabeto latino usando outros símbolos em lugar das letras, como números por exemplo. A própria palavra leet admite muitas variações, como l33t ou 1337. O uso do leet reflete uma subcultura relacionada ao mundo dos jogos de computador e internet, sendo muito usada para confundir os iniciantes e afirmar-se como parte de um grupo. Pesquise sobre as principais formas de traduzir as letras. Depois, faça um programa que peça uma texto e transforme-o para a grafia leet speak. 
*/


$alfabeto = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n','o', 'p', 'q', 'r','s','t', 'u', 'v', 'w', 'x','y', 'z'];



$leet = 
[ 
	['4', '@', '/-\\'],
	['8', '|3'],
	['¢', '[', '('],
	['[)', '|>', '|)'],
	['3', '&', '€', 'ë'],
	['|=', 'pH'],
	['6', 'C-'],
	['[-]', '#', '<~>', '{=}'],
	['!', '1', 'ï'],
	['j', '_/,'],
	['|<,', '|{ '],
	['1_', '|_'],
	['(u)', '/\/\\', '^^'],
	['/V', '|\|', 'n'],
	['o', '()', '*', 'ö'],
	['|^', '|*', '|o', '|>', '|7'],
	['q', '(_,)', 'o,'],
	['|2', 'lz', 'Я', '12'],
	['$', '5', '§'],
	['7', '+',']['],
	['(_)', '|_|', 'ü'],
	['\/', 'v'],
	['\/\/', 'vv','\X/', '\V/'],
	['><', 'Ж', 'ecks'], 
	['Y', '`/', ' ¥'],
	['2', 'z', '~\_']

];



$escolhe = function (&$a){
	$qtd = count($a)-1;
	$ale = rand(0, $qtd);
	//echo $a[$ale] . " - ";
	$a = $a[$ale];
	return $a;
};

function transforma($leet, $escolhe, $alfabeto, $string){
	array_walk($leet, $escolhe);
	$string = str_replace($alfabeto, $leet, $string);
	return $string;
}


?>


<form method="post">
	<input type="text" name="str">
	<input type="submit" name="">
</form>

<?php
if(!empty($_POST['str'])){
	echo transforma($leet, $escolhe,$alfabeto,  $_POST['str']);
}