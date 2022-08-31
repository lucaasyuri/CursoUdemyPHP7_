<?php 

namespace Cliente;

class Cadastro extends \Cadastro // \: volta na raiz do projeto e pega o cadastro que está la
{
	public function registrarVenda()
	{
		echo "Foi registrada uma venda para o cliente " . $this->getNome();
	}
}

 ?>