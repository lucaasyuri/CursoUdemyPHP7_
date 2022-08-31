<?php 

class Documento {

	private $numero;

	public function getNumero()
	{

		return $this->numero;

	}

	public function setNumero($n)
	{
		$this->numero = $n;
	}

}



class CPF extends Documento {
	//extends: a classe 'Programador' vai extender tudo o que tem na classe 'Pessoa'

	public function validar():bool
	{
		$numeroCPF = $this->getNumero();

		//Validação

		return true;
	}
}




$doc = new CPF();

$doc->setNumero("123456789-12");

var_dump($doc->validar());

echo "<br>";

echo $doc->getNumero();


 ?>