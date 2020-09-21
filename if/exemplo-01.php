<?php

$qualASuaIdade= 65;
$idadeCrianca = 12; 
$idadeMaior= 18;
$idadeMelhor = 65;
$salario = 1000;
if ($qualASuaIdade<$idadeCrianca) {
	echo "Criança";
}elseif($qualASuaIdade<$idadeMaior){
	echo "Adolescente";
}elseif($qualASuaIdade<$idadeMelhor){
	echo "Adulto";
	} else {
		echo "Idoso";
	}
echo "<br>";


echo ($qualASuaIdade < $idadeMaior)? "Menor de Idade":"Maior de Idade";
echo "<br>";

echo($salario> 5000)? "Salario bom":"salario baixo";

?>
