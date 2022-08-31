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


class Programador extends Pessoa {

//extends: a classe 'Programador' vai extender tudo o que tem na classe 'Pessoa'

}


$objeto = new Programador();

//echo $objeto->senha . "<br>";

$objeto->verDados();


 ?>