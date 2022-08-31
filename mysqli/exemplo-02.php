<?php
//conexão com o banco de dados

$conn = new mysqli("localhost", "root", "", "dbphp7"); //("ip", "usuario", "senha", "banco de dados")

//tratamento de erro na conexão com o banco
if ($conn->connect_error) 
{

	echo "Error: " . $conn->connect_error;

}


//MOSTRANDO NA TELA DO USUÁRIO
$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

//convertendo para JSON
$data = array();

while ($row = $result->fetch_array(MYSQLI_ASSOC)) //fetch_array: retorna um dado caso ele existir e atribui na variável '$row'
{

	array_push($data, $row); //array_push(): adiconar um novo item($row) no array data

}

echo json_encode($data);


 ?>