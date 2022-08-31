<?php 
//criando arquivos com 'fopen'

$file = fopen("log.txt", "a+"); //fopen("caminho do arquivo", "como quer usar o arquivo (ler/alterar)")
								//w+: a+:escreve/adiciona

fwrite($file, date("Y-m-d H:i:s") . "\r\n"); //fwrite("arquivo que estou usando/resource", "dados que eu quero colocar dentro do arquivo")

fclose($file); //fechando manipulador

echo "Arquivo criado com sucesso!!";

 ?>