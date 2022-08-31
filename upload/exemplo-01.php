<form method="POST" enctype="multipart/form-data"> <!--enctype: os dados serão enviados como dados binários-->

	<input type="file" name="fileUpload">

	<button type="submit">Send</button>

</form>

<?php 
//upload de arquivos com PHP7

if ($_SERVER["REQUEST_METHOD"] === "POST") //REQUEST_METHOD: guarda qual é o tipo da solicitação (get,post,...)
{
	$file = $_FILES["fileUpload"]; //$_FILES["nome do <input>"]}

	if ($file["error"])
	{
		throw new Exception("Error: " . $file["error"]);
	}

	$dirUploads = "uploads";

	if (!is_dir($dirUploads)) //!is_dir: se não for um diretório
	{
		mkdir($dirUploads); //mkdir(): criar um diretório
	}

	if (move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"]))
	{

		echo "Upload realizado com sucesso";

	} else {

		throw new Exception("Não foi possível fazer o upload");

	}
	

}

 ?>