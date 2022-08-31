<?php 
//TRANSAÇÕES com PDO
//COMMIT: confirma ROLLBACK: cancela

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 3;

$stmt->execute(array($id)); //outro jeito de passar parâmetros ao invés do 'bindParam()'

//$conn->rollback();

$conn->commit();

echo "Delete OK!!!";

 ?>