<?php 

interface Veiculo{

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marca);
}


class Civic implements Veiculo
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
		echo "o veiculo trocou a marcha até".$velocidade;
	}
}

	$carro = new Civic();

	$carro->trocarMarcha(2);
 ?>
