<?php
//conexão com o banco de dados

$conn = new mysqli("localhost", "root", "", "dbphp7"); //("ip", "usuario", "senha", "banco de dados")

//tratamento de erro na conexão com o banco
if ($conn->connect_error) 
{

	echo "Error: " . $conn->connect_error;

}


//INSERT
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?)"); //?: serão trocados pelos valores

$stmt->bind_param("ss", $login, $pass); //bind_param(): espera os tipos de dados dos '?', s:string, logo são 2 campos, então eu coloco 'ss'
// no segundo campo do bind_param() coloco os valores que queremos inserir

$login = "user";
$pass = "123456";

$stmt->execute();

$login = "root";
$pass = "!@#$";

$stmt->execute();

 ?>