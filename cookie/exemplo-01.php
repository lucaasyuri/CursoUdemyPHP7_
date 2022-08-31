<?php 

$data = array(
	"empresa"=>"Hcode Treinamentos"

);

setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600); //setcookie(nome do cookie, valor do cookie(Dados), tempo de duração): função para definiir um cookie

echo "OK";


 ?>