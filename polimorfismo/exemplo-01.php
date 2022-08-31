<?php 
//Polimorfismo

abstract class Animal {

	public function falar() {

		return "Som";

	}

	public function mover() {

		return "Anda";

	}

}



class Cachorro extends Animal {

	public function falar() { //usando polimorfismo (mudando o comportamento do método 'falar()')

		return "Late";

	}

}

class Gato extends Animal {

	public function falar() {//usando polimorfismo (mudando o comportamento do método 'falar()')

		return "Mia";

	}

}

class Passaro extends Animal {

	public function falar() {

		return "Canta";

	}

	public function mover() {

		return "Voa e " . parent::mover(); //parent: chama a classe pai

	}

}



$pluto = new Cachorro();

echo $pluto->falar() . "<br>";
echo $pluto->mover() . "<br><br>";


$garfield = new Gato();

echo $garfield->falar() . "<br>";
echo $garfield->mover() . "<br><br>";

$ave = new Passaro();

echo $ave->falar() . "<br>";
echo $ave->mover() . "<br><br>";


 ?>