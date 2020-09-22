<?php 
require_once("config.php");

echo session_save_path();
var_dump(session_status());

switch (session_status()) {
	case '0':
		echo "desabilistadas";
		break;
	case '1':
		echo "habilitada mas nenhuma existir";
		break;
	case '2':
		echo "habilitada";
		break;
	
	default:
		# code...
		break;
}


 ?>