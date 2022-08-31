<?php 
//para usar sessão, precisa utilizar o session_start()

require_once("config.php");

session_unset($_SESSION['nome']); //apagando session

echo $_SESSION['nome'];

 ?>