<?php 
require("config.php");

session_unset();
echo $_SESSION["nome"];

session_destroy();


 ?>

