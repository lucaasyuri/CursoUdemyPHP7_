<?php
// strpos("qual é o alvo/variável" , "o que está procurando dentro da variável")
//retorna o índice (casas para chegar na palavra mãe)

$frase = "A repetição é mãe da retenção.";

$resultado = strpos($frase, "mãe");

var_dump($resultado);
echo "<br>";


//retirando só o que está antes de 'mãe' substr("alvo", "à partir de onde?", "até onde?")
$texto = substr($frase, 0, $resultado);

var_dump($texto);
echo "<br>";


//começando à partir de tal posição substr("alvo", "à partir de onde?")
$texto2 = substr($frase, $resultado);

var_dump($texto2);

 ?>