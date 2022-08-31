<?php 
//Atributos e Métodos

class Carro {

	private $modelo; //atributo
	private $motor;
	private $ano;

	public function getModelo() { //get: pegar modelo

		return $this->modelo;

	}

	public function setModelo($modelo) {  //setModelo(quem eu quero mudar)

		$this->modelo = $modelo; //private $modelo recebe o parâmetro so setModelo '$modelo'

	}



	public function getMotor():float { // :float: quer dizer que o retorno deste método vai ser um float

		return $this->motor;

	}

	public function setMotor($motor) {

		$this->motor = $motor;

	}



	public function getAno():int { // :int: quer dizer que o retorno deste método vai ser um inteiro

		return $this->ano;

	}

	public function setAno($ano) {

		$this->ano = $ano;

	}



	public function exibir() {

		return array(

			"modelo"=>$this->getModelo(),
			"motor"=>$this->getMotor(),
			"ano"=>$this->getAno()

		);

	}

}

//print_r: exibe o array e sua estrutura
//var_dump: mostra o tipo de dado


$gol = new Carro();
$gol->setModelo("Gol GT");
$gol->setMotor("1.6");
$gol->setAno("2017");
var_dump($gol->exibir());

 ?>