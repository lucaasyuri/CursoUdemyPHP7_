<?php 

//$ts = strtotime("2001-09-11"); // converte string para timeStamp

//$ts = strtotime("now");

//$ts = strtotime("+1 day");

$ts = strtotime("+1 week");

echo date("l, d/m/Y", $ts); //$ts: timestamp

 ?>