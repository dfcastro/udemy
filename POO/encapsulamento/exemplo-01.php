<?php 
class Pessoa{

	public $nome = "Rasmus";
	protected $idade =45;
	private $senha = "123456";

	public function verDados(){

		echo $this->nome. "<br>";
		echo $this->idade. "<br>";
		echo $this->senha. "<br>";
	}


}

$objeto = new Pessoa();
echo $objeto->nome;
//echo $objeto->idade;
//echo $senha->idade;
$objeto->verDados();
 ?>