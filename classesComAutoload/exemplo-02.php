<?php 

function incluirClasses($nomeClasse) {

	if (file_exists($nomeClasse.".php") === true) { //file_exists(): verificando se o arquivo já existe no diretório

		require_once($nomeClasse.".php");

	}

}


spl_autoload_register("incluirClasses"); //registra mais de 1 função como funções de autoload

spl_autoload_register(function($nomeClasse){ //incluindo classes da pasta "abstrata"

		if (file_exists("Abstratas". DIRECTORY_SEPARATOR . $nomeClasse.".php") === true) { //file_exists(): verificando se o arquivo já existe no diretório
																						// DIRECTORY_SEPARATOR: coloca a barra automatica do caminho da pasta

		require_once("Abstratas" . DIRECTORY_SEPARATOR . $nomeClasse.".php");

	}

});


	//instânciando classe 'DelRey'
	$carro = new DelRey();

	$carro->acelerar(80);

 ?>