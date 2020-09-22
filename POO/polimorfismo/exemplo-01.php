<?php 

abstract class Animal
{
	public function falar(){

		return "som";
	}

	public function mover()
	{
		return "anda";
	}


}

class Cachorro extends Animal
{
	public function falar()
	{
		return "Late";
	}
}
class Gato extends Animal
{
	public function falar()
	{
		return "Mia";
	}
}

class Passaro extends Animal
{
	public function falar()
	{
		return "piu";
	}

	public function mover(){
		return "voa e ".parent::mover();
	}
}


$pluto = new Cachorro();
echo $pluto->falar()."<br>";
echo $pluto->mover()."<br>";

$garfield = new Gato();
echo $garfield->falar()."<br>";
echo $garfield->mover()."<br>";

$passaro = new passaro();
echo $passaro->falar()."<br>";
echo $passaro->mover()."<br>";
 ?>