<?php 
//download de arquivos com file_gets_content

$link = "file:///C:/xampp/htdocs/LucasPHP/googlelogo_color_120x44dp.png";

$content = file_get_contents($link); //conteúdo da imagem (lendo o binário)

$parse = parse_url($link); //transformando o que está vindo pela url em um arquivo real

$basename = basename($parse["path"]);

$file = fopen($basename, "w+"); //criando arquivo

fwrite($file, $content); //fwrite("arquivo que estou usando/resource", "dados que eu quero colocar dentro do arquivo")

fclose($file); //fechando arquivo

 ?>

 <img src="<?=$basename?>">