<?php 

require_once("config.php");

$sql= new Sql();
$root = new Usuario();

//carrega apenas 1 usuario
//$root->loadById(3);
//echo $root;

//carrega uma lista de usuarios
//$lista =Usuario::getList();
//echo json_encode($lista);


//carregar uma lista d eusuários buscando pelo login
//$search = Usuario::search("jo");

//echo json_encode($search);


//carrega usuario usando login e senha
//$usuario = new Usuario();
//$usuario->login("root","123");
//echo json_encode($usuario);

//Criando um novo usuario
/*$aluno = new Usuario("aluno", "@alun0");

$aluno->insert();
echo $aluno;*/


//Alterar um usuario
/*$usuario = new Usuario();
$usuario->loadById(12);

$usuario->update('professor','professor');

echo $usuario;*/


$usuario =new Usuario();
$usuario->loadById(12);
$usuario->delete();

 ?>