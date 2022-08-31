<?php 

$dt = new DateTime(); //$dt: objeto

$periodo = new DateInterval("P15D");

echo $dt -> format("d/m/Y H:i:s");

$dt -> add($periodo); //add(): adicionando uma data

echo "<br>";

echo $dt -> format("d/m/Y H:i:s");

 ?>