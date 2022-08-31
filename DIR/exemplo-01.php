<?php 

//verificando se o diretório existe
$name = "images";

if (!is_dir($name)) //se ele não existe
{

	mkdir($name); //mkdir(): criar um diretório
	echo "Diretório $name criado com sucesso!";

} else {

	rmdir($name); //rmdir(): remove um diretório
	echo "Já existe o diretório: $name, foi removido!";

}

 ?>