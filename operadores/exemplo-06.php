<?php 
//operador de comparação null coalescing ()

$a = NULL;

$b = NULL;

$c = 10;

echo $a ?? $b ?? $c; //mostra $a 'se $a for NULL, mostra $b' 'se $b for NULL, mostra $c'

 ?>