<?php
/*
8 - Palíndromo. Um palíndromo é uma seqüência de caracteres cuja leitura é idêntica se feita da direita para esquerda ou vice−versa. Por exemplo: OSSO e OVO são palíndromos. Em textos mais complexos os espaços e pontuação são ignorados. A frase SUBI NO ONIBUS é o exemplo de uma frase palíndroma onde os espaços foram ignorados. Faça um programa que leia uma seqüência de caracteres, mostre−a e diga se é um palíndromo ou não.
*/

function palindromo($str){
	$s = str_replace('.', '', $str);
	$s = str_replace(' ', '', $s);
	$s = str_replace('!', '', $s);
	$s = str_replace('@', '', $s);
	$s = str_replace('"', '', $s);
	$s = str_replace('\'', '', $s);
	$s = str_replace(',', '', $s);
	$s = str_replace(';', '', $s);
	$s = str_replace(':', '', $s);
	$s = str_replace('/', '', $s);
	$s = str_replace('\\', '', $s);

	//echo $s;

	$c = strlen($s) / 2;

	for($i = 0; $i <= $c; $i++){
			$palindromo = true;		
		if($s[$i] == $s[(-$i-1)]){


			
		} else {
			$palindromo = false;
			break;
		}
	}


	if($palindromo){
		echo "É palindromo";
	} else {
		echo "NÃO é palindromo";		
	}
}



?>


<form method="post">
	<label>Frase:</label> <br/>
	<input type="text" name="str"> <br/>
	<input type="submit">
</form>

<?php
if($s = filter_input(INPUT_POST,'str')){
	palindromo($s);
}
?>