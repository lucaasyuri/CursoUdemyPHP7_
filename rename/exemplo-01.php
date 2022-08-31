<?php 
//movendo um arquivo

$dir1 = "folder_01";
$dir2 = "folder_02";

//criando diretório
if (!is_dir($dir1)) //!is_dir: se não for um diretório
{
	mkdir($dir1); //mkdir(): criar um diretório
}

if (!is_dir($dir2))
{
	mkdir($dir2);
}



$filename = "README.txt";

//criando arquivo
if (!file_exists($dir1 . DIRECTORY_SEPARATOR . $filename)) //se não existir o arquivo '$filename'
{
	$file = fopen($dir1 . DIRECTORY_SEPARATOR . $filename, "w+");
	//fopen(): criando arquivo ("caminho do arquivo", "como quer usar o arquivo (ler/alterar)")

	fwrite($file, date("Y-m-d H:i:s"));
	//fwrite("arquivo que estou usando/resource", "dados que eu quero colocar dentro do arquivo")

	fclose($file); //fclose(): fecha manipulador
}


//movendo arquivo
rename($dir1 . DIRECTORY_SEPARATOR . $filename, //origem
		$dir2 . DIRECTORY_SEPARATOR . $filename //destino
	);

echo "Arquivo movido com sucesso!";


 ?>