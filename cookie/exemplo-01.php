<?php 

$data = array(
	'empresa' => "teste", );

setcookie("NOME_DO_COOKIE", json_encode($data), time()+ 3600);

echo "Ok!";




 ?>