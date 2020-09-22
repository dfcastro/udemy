<?php 
interface Veiculo
{

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marca);
}

abstract class Automovel implements Veiculo
{
	public function acelerar($velocidade)
	{
		echo "o veiculo acelerou até".$velocidade;
	}

	public function frenar($velocidade)
	{
		echo "o veiculo frenou até".$velocidade;
	}
	public function trocarMarcha($velocidade)
	{
		echo "o veiculo trocou a marcha ".$velocidade;
	}
}
	class DelRey extends Automovel
	{
		public function empurar()
		{

		}
	}

	$carro = new Automovel();

	$carro->acelerar(200);

 ?>