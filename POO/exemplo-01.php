<?php 
//Classe

class Pessoa {

	public $nome; //atributo

	public function falar() { //método

		return "O meu nome é ".$this -> nome; //$his: representação da nossa classe já instanciada (apenas dentro do método)

	}

}

$Lucas = new Pessoa();

$Lucas -> nome = "Lucas Yurie Silveira";

echo $Lucas -> falar();

 ?>