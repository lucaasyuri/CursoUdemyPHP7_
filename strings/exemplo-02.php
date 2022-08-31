<?php
//deixando todo o texto maiúsculo (strtoupper())

$nome = "lucas yurie";
$nome2 = "selma silveira";

$nome = strtoupper($nome);

echo $nome;
echo "<br>";


//deixando todo o texto minúsculo (strtolower())

$nome = strtolower($nome);

echo $nome;
echo "<br>";


//deixando apenas as primeiras letras maiúsculas (strtoupper())

$nome = ucwords($nome);

echo $nome;
echo "<br>";


//deixando apenas as primeiras letras do parágrafo maiúsculas (strtoupper())

$nome2 = ucfirst($nome2);

echo $nome2;

 ?>