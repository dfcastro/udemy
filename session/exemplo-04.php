<?php 
session_id('adkrjek21c7uc72me384a8nvmi');
require_once("config.php");
session_regenerate_id();// valida na tela login
echo session_id();

var_dump($_SESSION);
 ?>