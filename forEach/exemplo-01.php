<?php 

$meses = array(
	"Janeiro", "Fevereiro", "Março",
	"Abril", "Maio", "Junho",
	"Julho", "Agosto", "Setembro",
	"Outubro", "Novembro", "Dezembro"
);

// foreach("quem devo percorrer", "cria variavel para o item que encontrar")
//$index: posição do array que está o item

foreach ($meses as $index => $mes) {

	echo "Indice: ".$index."<br>";
	echo "O mês é: " .$mes."<br><br>";

}

 ?>