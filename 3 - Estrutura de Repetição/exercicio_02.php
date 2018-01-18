<?php /* 2 - Faça um programa que leia um nome de usuário e a sua senha e não aceite a senha igual ao nome do usuário, mostrando uma mensagem de erro e voltando a pedir as informações. */ ?>




<form method="post" action="">
	<label> Usuário</label> <br/>
	<input type="text" name="usuario"><br/>
	<label> Senha</label> <br/>
	<input type="password" name="senha"><br/>
	<input type="submit" value="Enviar dados">
</form>
<h4>
<?php 
if(!empty($_POST['usuario']) && !empty($_POST['senha'])){
	if($_POST['usuario'] == $_POST['senha']){
		echo "Erro, usuario e senha não podem ser iguais.";
	} else {
	echo "Login feito com sucesso.";
}

} else {
	echo "Informe ambos os campos.";
} 



?>

</h4>
