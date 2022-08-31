<?php 
//Classe Abstrata (o objeto nunca vai instanciar a classe abstrata)

interface Veiculo {

	//requisitos de um veículo
	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarchas($marcha);

}

abstract class Automovel implements Veiculo {
//implements: esta classe tem que implementar a classe 'Veiculo' (é obrigatório)
//pode ser implementada mais de 1 interface na classe, separada por ','

	public function acelerar($velocidade)
	{
		echo "O veículo acelerou até " . $velocidade . " km/h<br>";
	}

	public function frenar($velocidade)
	{
		echo "O veículo frenou até " . $velocidade . " km/h<br>";
	}

	public function trocarMarchas($marcha)
	{
		echo "O veículo engatou a marcha " . $marcha . "<br>";
	}

}


class DelRey extends Automovel {
	// é preciso criar uma classe no qual chama a classe abstrata, ou seja, para não poder instanciar diretamente a classe abstrata

	public function empurrar() {

	}

}



$carro = new DelRey();

$carro->acelerar(200);


 ?>