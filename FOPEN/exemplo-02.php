<?php 

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");

$headers = array();

foreah ($usuarios[0] as $key => value)
{
	array_push($headers, ucfirst($key));
}

print_r($headers);

 ?>