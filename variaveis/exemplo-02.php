<?php

	$anoNascimento = 1998;

	$nomeCompleto = "";

	$nome1 = "Lucas";

	$sobrenome = "Silveira";

	//concatenando variáveis
	$nomeCompleto = $nome1." ".$sobrenome;

	echo $nomeCompleto;

	exit; //codigo para de executar aqui



	//Apagando variável
	echo $nome1;

	echo "<br/>"; //pulando 1 linha

	//unset($nome1); //limpando variável

	echo $nome1;

	if (isset($nome1)) { //fazendo validção para saber se a variável existe
		echo $nome1;
	}



	//Tipos de dados PHP




?>