<?php 

namespace Cliente;

class Cadastro extends \Cadastro{

	public function registrarVenda(){


		echo "foi registrado uma venda para o cliente ".$this->getNome();;
	}
}


 ?>