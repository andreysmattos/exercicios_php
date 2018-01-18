<?php

class Atleta {
	private $nome;
	private $saltos = [];



	function __construct($nome, $saltos){
		$this->nome = $nome;
		$this->saltos = $saltos;
	}



	public function apresentar(){

		echo "Primeiro salto: " . $this->saltos[0] . " metros.<br/>"; 
		echo "Segundo salto: " . $this->saltos[1] . " metros.<br/>"; 
		echo "Terceiro salto: " . $this->saltos[2] . " metros.<br/>"; 
		echo "Quarto salto: " . $this->saltos[3] . " metros.<br/>"; 
		echo "Quinto salto: " . $this->saltos[4] . " metros.<br/>";

		echo "<br/>";

		echo "Melhor salto: " . max($this->saltos) . " metros. <br/>";
		echo "Pior salto: " . min($this->saltos) . " metros. <br/>";

		$maior = array_search(max($this->saltos), $this->saltos);
		unset($this->saltos[$maior]);
		$menor = array_search(min($this->saltos), $this->saltos);
		unset($this->saltos[$menor]);

		$media = array_sum($this->saltos) / count($this->saltos);

		echo "<br/>";
		echo "Média dos demais saltos: " . $media . " metros <br/>";

		echo "<br/>";
		echo "Resultado final: <br/>";
		echo $this->nome . ": " . $media . " metros. <br/>";

		//echo "O maior valor se encontra na pos " . $maior;
	}




	//Getters
	public function getNome(){
		return $this->nome;
	} 

	public function getSaltos(){
		return $this->saltos;
	} 

	//Setters
	public function setNome($nome_parametro){
		$this->nome = $nome_parametro;
	} 

	public function setSaltos($saltos_parametro){
		
		$this->saltos = $saltos_parametro;
	} 


}


?>