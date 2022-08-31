<?php 
//strftime: trazendo o nome do mês e da semana em português
//pt_BR: padrão, pt_BR.utf-8: padrão com UTF, padrão do windows: portuguese

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

//echo strftime("%A %B");

echo ucwords(strftime("%A %B"));


 ?>