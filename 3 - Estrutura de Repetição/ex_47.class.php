<?php

class Atleta {
	//atributos
	private $nome;
	private $nota;


	public function resultado(){
		echo "<hr>";
		echo "<h4>";
		$melhor = max($this->nota);
		$pior = min($this->nota);

		echo "Resultado final: <br/>";
			echo "Melhor nota: " . $melhor . "<br/>";
			echo "Pior nota: " . $pior . "<br/>"; 

		$aux = array_search($melhor, $this->nota);
		unset($this->nota[$aux]);
		$aux2 = array_search($pior, $this->nota);
		unset($this->nota[$aux2]);
		$media = array_sum($this->nota) / count($this->nota);
		echo "Média: " . $media . "<br/>";


		echo "</h4>";

	}


	public function mostrarNome(){
		echo "<h4>";
		echo "Atleta: " . $this->nome . "<br/>"; 
		echo "</h4>";
	}

	public function mostrarNotas(){
		echo "<h4>";
		foreach($this->nota as $key => $valor){
			echo "Nota " . ($key+1) . ": " . $valor . "<br/>";
		}
		echo "</h4>";
	}


	function __construct($nome, $nota){
		$this->nome = $nome;
		$this->nota = $nota;
	}

	//getters
	public function getNome(){
		return $this->nome;
	}

	public function getNota(){
		return $this->nota;
	}

	//setters
	public function setNome($nome_parametro){
		$this->nome = $nome_parametro;
	}

	public function setNota($nota_parametro){
		$this->nome = $nota_parametro;
	}

}

?>