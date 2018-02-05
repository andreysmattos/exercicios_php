<?php
/*
4 - Classe Pessoa: Crie uma classe que modele uma pessoa:

    Atributos: nome, idade, peso e altura
    Métodos: Envelhecer, engordar, emagrecer, crescer. Obs: Por padrão, a cada ano que nossa pessoa envelhece, sendo a idade dela menor que 21 anos, ela deve crescer 0,5 cm. 
*/

namespace Pessoa;

interface IPessoa 
{
	public function envelhecer();
	public function engordar($gramas);
	public function emagrecer($gramas);
	public function crescer();
}


class Pessoa implements IPessoa
{
	//Atributos
	private $nome;
	private $idade;
	private $peso;
	private $altura;

	//Metodos
	public function __construct($nome, $idade, $peso, $altura){
		$this->nome = $nome;
		$this->idade = $idade;
		$this->peso = $peso;
		$this->altura = $altura;
	}

	public function envelhecer(){
		$this->idade++;
		$this->crescer();
	}

	public function engordar($gramas){
		$this->peso += $gramas / 1000;
	}

	public function emagrecer($gramas){
		$this->peso += $gramas / 1000;
	}

	public function crescer(){
		if($this->idade <= 21){
			$this->altura += 0.5;
		}
	}

}



$pessoa = new Pessoa('Andrey', 16, 90, 170);


$pessoa->envelhecer();
$pessoa->envelhecer();
$pessoa->envelhecer();
$pessoa->envelhecer();
$pessoa->envelhecer();
$pessoa->envelhecer();
$pessoa->envelhecer();
$pessoa->envelhecer();

$pessoa->emagrecer(600);

echo "<pre>";
	print_r($pessoa);
echo "</pre>";