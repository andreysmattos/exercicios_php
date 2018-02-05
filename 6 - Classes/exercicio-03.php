<?php

namespace Retangulo;


/*
3 - Classe Retangulo: Crie uma classe que modele um retangulo:

    Atributos: LadoA, LadoB (ou Comprimento e Largura, ou Base e Altura, a escolher)
    Métodos: Mudar valor dos lados, Retornar valor dos lados, calcular Área e calcular Perímetro;
    Crie um programa que utilize esta classe. Ele deve pedir ao usuário que informe as medidades de um local. Depois, deve criar um objeto com as medidas e calcular a quantidade de pisos e de rodapés necessárias para o local. 
*/


interface IRetangulo 
{
	public function mudarValorDosLados($base, $altura);
	public function retornarValorDosLados();
	public function calcularArea();
	public function calculaPerimetro();
}




class Retangulo implements IRetangulo
{
	//Atriubutos
	private $base;
	private $altura;

	//Metodos
	public function __construct($base, $altura){
		$this->base = $base;
		$this->altura = $altura;
	}


	public function mudarValorDosLados($base, $altura){
		$this->base = $base;
		$this->altura = $altura;

	}

	public function retornarValorDosLados(){
		return ['base'=>$this->base, 'altura'=>$this->altura];

	}

	public function calcularArea(){
		return $this->base * $this->altura;
	}

	public function calculaPerimetro(){
		return ($this->base + $this->altura) * 2;
	}

}


?>


<form method="post">
	<label> Base: </label> <br/>
	<input type="number" name="base"><br/>
	<br/>
	<label> Altura:</label><br/>
	<input type="number" name="altura"> <br/>
	<br/>
	<input type="submit">
</form>


<?php


$base = filter_input(INPUT_POST, 'base', FILTER_VALIDATE_FLOAT);
$altura = filter_input(INPUT_POST, 'altura', FILTER_VALIDATE_FLOAT);

if($base && $altura){
	$retangulo = new Retangulo($base, $altura);
	echo "<hr>";
	echo "<h4>";
		echo "Área: " . $retangulo->calcularArea() . "<br/>";
		echo "Perímetro: " . $retangulo->calculaPerimetro() . "<br/>";
	echo "</h4>";
}