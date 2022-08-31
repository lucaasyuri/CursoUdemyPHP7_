<?php

$pessoa = array(

	'nome' => 'João',
	'idade' => 20

);

foreach ($pessoa as &$value){
	//&$value: o value, ou seja, o valor de dentro do array estou passando por referência

	if(gettype($value) === 'integer') {
		//gettype(): retorna tipo de dado da variável
		//alterando os dados o array no 'foreach'

		$value += 10;

	}

	print_r($pessoa); //print_r: exibe o array e sua estrutura

}

 ?>