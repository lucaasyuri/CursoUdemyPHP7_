<?php 
//Classes com autoload (chama classes em outros arquivos)

	function __autoload($nomeClasse){

	require_once("$nomeClasse.php");

	}

	//instânciando classe 'DelRey'
	$carro = new DelRey();

	$carro->acelerar(80);


 ?>