<?php 

function ola() {

	$argumentos = func_get_args(); //func_get_args(): recupera e retorna como array todos os argumentos que foram passados como parametros

	return $argumentos;

}

var_dump(ola("Bom dia"));

 ?>