<?php 

spl_autoload_register(function($nameClass)
{
	//var_dump($nameClass);


	$dirClass = "class"; //nome da pasta
	$filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php"; //caminho || DIRECTORY_SEPARATOR: barra do caminho automática


	if (file_exists($filename))
	{ //verificando se o arquivo exite

		require_once($filename); //incluindo no código

	}



});

 ?>