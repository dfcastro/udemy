<?php 

	class Pessoa{
		public $nome;//atributo
		
		public function falar(){//método
			echo "meu nome é ".$this->nome;
		}
	}


$glaucio = new Pessoa();

$glaucio->nome = "Glaucio Daniel";
$glaucio->falar();
 ?>