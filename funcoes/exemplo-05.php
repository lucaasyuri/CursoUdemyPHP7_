<?php 
//&: passagem de parâmetro por referência ( o que acontece dentro da função, muda o valor na variável)

$a = 10;

function trocaValor(&$a) {

	$a += 50;

	return $a;

}

echo trocaValor($a);

echo "<br>";

echo $a;

echo "<br><br><br>";


$b = 10;

function trocaValor2($b) {

	$b += 50;

	return $b;

}

echo trocaValor2($b);

echo "<br>";

echo $b;

 ?>