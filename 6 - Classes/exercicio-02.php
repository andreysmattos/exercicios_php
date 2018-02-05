<?php

namespace Quadrado;

/*
2 - Classe Quadrado: Crie uma classe que modele um quadrado:

    Atributos: Tamanho do lado
    Métodos: Mudar valor do Lado, Retornar valor do Lado e calcular Área; 
*/

interface IQuadrado
{
	public function mudarValorDoLado(float $valor);
	public function retornarValorDoLado();
	public function calcularArea();
}



class Quadrado implements IQuadrado
{
	//Atributos
	private $tamanhoDoLado;

	//metodos

	public function __construct($tam){
		$this->tamanhoDoLado = $tam;
	}

	public function mudarValorDoLado(float $valor){
		$this->tamanhoDoLado = $valor;
	}

	public function retornarValorDoLado(){
		return $this->tamanhoDoLado;
	}

	public function calcularArea(){
		return $this->tamanhoDoLado ** 2;
	}



}


$q = new Quadrado(5);

$q->mudarValorDoLado(10);

echo $q->retornarValorDoLado() . "<br/>";

echo $q->calcularArea();