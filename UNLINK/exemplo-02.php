<?php 
//excluindo arquivos dentro de uma pasta 'images'

if (!is_dir("images")) { //se ele não existe
	("images"); //mkdir(): criar um diretório
}

foreach (scandir("images") as $item) //scandir: lê um diretório e transforma em um array
{
	if (!in_array($item, array(".", "..")))
	{
		unlink("images/" . $item); //exclui arquivo
	}

}

echo "OK";

 ?>