<?php 
//lendo tudo o que está dentro di diretório

$images = scandir("images"); //vai retornar uma lista do que tem dentro através de um array

//var_dump($images);

$data = array();

foreach ($images as $img)
{

	if (!in_array($img, array(".", ".."))) //in_array(alvo que está procurando, opcoes)
	{

		$filename = "images" . DIRECTORY_SEPARATOR . $img;

		$info = pathinfo($filename); //nome do arquivo

		$info["size"] = filesize($filename); //tamanho do arquivo

		$info["modified"] = date("d/m/Y H:i:s", filemtime($filename)); //data de modificação

		$info["url"] = "http://localhost/lucasPHP/DIR/".str_replace("\\", "/", $filename); //acessar arquivo via URL (como a barra ficou ao contrária, vamos usar o 'replace')

		array_push($data, $info);

	}

}

echo json_encode($data);

 ?>