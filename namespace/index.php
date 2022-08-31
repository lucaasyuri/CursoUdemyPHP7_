<?php 

require_once("config.php");

use Cliente\Cadastro; //utilizando namespace

$cad = new Cadastro();

$cad->setNome("Lucas Yurie");
$cad->setEmail("lucas@lucas.com.br");
$cad->setSenha("123456");

$cad->registrarVenda();

 ?>