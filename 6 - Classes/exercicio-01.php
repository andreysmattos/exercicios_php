<?php

namespace Bola;


/*
1 - Classe Bola: Crie uma classe que modele uma bola:

    Atributos: Cor, circunferência, material
    Métodos: trocaCor e mostraCor 
*/

interface IBola 
{
	public function trocaCor($cor_parametro);
	public function mostraCor();
}





class Bola implements IBola
{
	//Atributos
	private $cor;
	private $circunferencia;
	private $material;

	//Metodos

	public function __construct($cor, $cir, $mat){
		$this->cor = $cor;
		$this->circunferencia = $cir;
		$this->material = $mat;
	}

	public function trocaCor($cor_parametro){
		$this->cor = $cor_parametro;
		return $this;
	}

	public function mostraCor(){
		return $this->cor;
	}
}


$bola = new Bola('Azul', 30, "Couro");


echo $bola->trocaCor("Branco")->mostraCor();