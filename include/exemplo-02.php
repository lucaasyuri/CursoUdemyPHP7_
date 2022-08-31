<?php 
// *incluindo código da função*

//include: tenta funcionar, mesmo que o arquivo não exista ou que esteja com algum problema


//require: obriga que o arquivo exista/funcionando (arquivo que está sendo incluído, caso contrário ele para a execução do código)

//require_once/include_once: ignora uma segunda chamada da função, caso tenha 2 chamadas iguais. ex: include "exemplo-01.php"

include "exemplo-01.php";

$resultado = somar(10, 25);

echo $resultado;

//alt+shift + 2: divide tela do sublime em 2

 ?>