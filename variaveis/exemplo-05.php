<?php 

$nome = "Lucas";

function teste(){
	global $nome; //utilizando variavel que foi utilizada fora da função
	echo $nome;

}

function teste2(){

	echo $nome." agora no teste2";

}

teste();

teste2();

 ?>