<?php 
//Encapsulamento

class Pessoa {

	public $nome = "Lucas Yurie Silveira";
	protected $idade = 24;
	private $senha = "123456"; //private: apenas a propria classe pode acessar

	public function verDados() {

		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>";

	}

}

$objeto = new Pessoa();

//echo $objeto->senha . "<br>";

$objeto->verDados();


 ?>