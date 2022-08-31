<?php

//array_push(): adicionando itens no array, após array ser criado

$pessoas = array();

array_push($pessoas, array(
	'nome' => 'João',
	'idade' => 20
));

array_push($pessoas, array(
	'nome' => 'Lucas',
	'idade' => 24
));


print_r($pessoas); //print_r: exibe o array e sua estrutura

echo "<br><br>";

print_r($pessoas[0]['nome']);

echo "<br><br>";

echo json_encode($pessoas);

 ?>