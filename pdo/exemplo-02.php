<?php 
//INSERT com PDO

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)"); // : identificador

$login = "lucas";
$password = "321";

$stmt->bindParam(":LOGIN", $login); //ligando os parametros do 'VALUES' com as variáveis
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "Inserido OK!";

 ?>