<?php 
$condicao =true;

while ($condicao) {

	$numero= rand(1,10);
	echo $numero;
	if($numero ===3){
		echo "três!!";

		$condicao= false;
	}
}
 ?>