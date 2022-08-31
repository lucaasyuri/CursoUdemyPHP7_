<?php 

require_once("config.php");

session_regenerate_id(); //gera novamente um id de sessão cada vez que atualiza

echo session_id();

var_dump($_SESSION);

 ?>