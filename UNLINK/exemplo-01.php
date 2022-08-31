<?php 
//Excluindo arquivos

$file = fopen("teste.txt", "w+");//fopen("caminho do arquivo", "como quer usar o arquivo (ler/alterar)")
								//w+: a+:escreve/adiciona

fclose($file); //fechando manipulador

unlink("teste.txt"); //exclui arquivo

echo "Arquivo removido com sucesso!";

 ?>