<?php 

$conn = new mysqli("localhost","root","root","dbphp7");

	if($conn->connect_error)
		{
			echo "error: ". $conn->connect_error;
		}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin,dessenha) values(?,?)");

$stmt->bind_param("ss", $login,$pass);
$login="user";
$pass= "12345";
$stmt->execute();

$login = "root";
$pass = "!@#$";
$stmt->execute();
 ?>