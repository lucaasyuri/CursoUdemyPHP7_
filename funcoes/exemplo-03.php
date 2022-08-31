<?php 

function ola($texto, $periodo="bom dia") {

	return "Olá $texto! $periodo<br>";

}

echo ola("mundo");
echo ola("Lucas", "boa tarde");

 ?>