<?php 

$a = 10;
function troca(&$a){

	$a += 50;

	return $a;
}

echo troca($a);
echo "<br>";
echo $a;
 ?>