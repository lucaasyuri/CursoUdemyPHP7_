<?php 

class Endereco {

	private $logradouro; //atributo
	private $numero;
	private $cidade;

	public function __construct($a, $b, $c) { //construtor (os parametros não precisam ter os mesmos nomes dos atributos)

		$this->logradouro = $a;
		$this->numero = $b;
		$this->cidade = $c;

	}

	public function __destruct() { // é chamado quando o objeto ele é destruido/removido da memória

		//var_dump("DESTRUIR");

	}

	public function __toString() {
		//retornando string

		return $this->logradouro.", ".$this->numero." - ".$this->cidade;

	}

}



$meuEndereco = new Endereco("Rua Serra de Botucatu", "123", "São Paulo");

//var_dump($meuEndereco);

//unset($meuEndereco); //removendo da memória

echo $meuEndereco; // o echo precisa de uma string, pois precisa mostrar o objeto inteiro, logo chama o método __toString()



 ?>