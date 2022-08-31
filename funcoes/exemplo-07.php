<?php 

function soma(int ...$valores):string {

	return array_sum($valores);

}

echo var_dump(2, 2); //var_dump(): mostra o tipo de dados

echo "<br>";

echo soma(25, 2);

echo "<br>";

echo soma(1.5, 3.2);

 ?>