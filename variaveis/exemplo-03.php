<?php 

//string
$nome = "Lucas";

//string com aspas simples ''
$site = 'www.lucas.com.br';

//numero (inteiro)
$ano = 1998;

//ponto flutuante (casas decimais)
$salario = 5500.99;

//booleano
$bloqueado = false;
	
/////////////////////////////////////////////////////////////////////////////////
// Tipos compostos (array, objeto)

$frutas = array("abacaxi", "laranja", "manga");
//echo $frutas[2] //[]: posição do array

$nascimento = new DateTime();
//var_dump($nascimento); // var_dump(): mostra o tipo de dado/tamanho que gastou/ valor que está dentro da variável



/////////////////////////////////////////////////////////////////////////////////////
// Tipo especiais (resource, null)

$arquivo = fopen("exemplo-03.php", "r");
//var_dump($arquivo);

$nulo = NULL;
$vazio = "";

?>