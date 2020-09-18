<?php

$nome = "daniel";

function teste()
{
	global $nome;
	echo $nome;
}

function teste1()
{
echo $nome = "agora teste2";
}

teste();
teste2();
?>