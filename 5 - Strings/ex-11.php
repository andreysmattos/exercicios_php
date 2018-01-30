<?php
/*
11 - Jogo de Forca. Desenvolva um jogo da forca. O programa terá uma lista de palavras lidas de um arquivo texto e escolherá uma aleatoriamente. O jogador poderá errar 6 vezes antes de ser enforcado.

    Digite uma letra: A
    -> Você errou pela 1ª vez. Tente de novo!

    Digite uma letra: O
    A palavra é: _ _ _ _ O

    Digite uma letra: E
    A palavra é: _ E _ _ O

    Digite uma letra: S
    -> Você errou pela 2ª vez. Tente de novo!

*/
session_start();
unset($_SESSION['tentativa']);
unset($_SESSION['letras']);
$_SESSION['tentativa'] = 1;
$_SESSION['letras'] = [];


function escolher_palavra(){
	$andrey = file('jogodaforca.txt');
	$r = rand(0, count($andrey)-1);
	return trim($andrey[$r]);

}

if(!empty($_SESSION['antes']) && !empty($_GET['tenta'])){
	if($_SESSION['antes'] == $_GET['tenta']){
		echo "Você ganhou! Parabéns";
		die();
	} else {
		echo "Você PERDEU!";
		die();
	}
}


$palavra = escolher_palavra();
$_SESSION['antes'] = $palavra;


?>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>


<form method="post" id="palavra">
	<label>Letra </label> <input type="text" maxlength="1" size="1" name="letra"> <br/>
	<label>Tentar palavra </label> <br/>
	

	<input type="submit">
</form>





<div id="mostra">
</div>


<script type="text/javascript">
	$(function(){
		$("#palavra").submit(function(){
			$.ajax({
				method: "POST",
				url: "11.php",
				data: {
					palavra: '<?php echo $palavra ?>',
					letra: $(':input[name=letra]').val()
				},
				success: function(data){
					$("#mostra").html(data);
				}
			});

			return false;

		});
		

	})


</script>