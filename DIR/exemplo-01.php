<?php 

$name = "images";

if (!is_dir($name))
{
	mkdir($name);
	echo "diretorio criado com sucesso";
}else{
	rmdir($name);
	
}



 ?>