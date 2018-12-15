<?php

require_once("config.php");

//carrega um usuario
//$root = new Usuario();
//$root->loadById(3);
//echo $root;

//Carrega uma lista de usuarios
//$lista = Usuario::getList();

//echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("jo");

//echo json_encode($search);

//Carrega um usuario usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("root", "!@#$");

//echo $usuario;

/*criando um novo usuario
$aluno = new Usuario("aluno", "@lun0");

$aluno->insert();

echo $aluno; */

/* Altera usuario
$usuario = new Usuario();
$usuario->loadById(3);

$usuario->update("professor", "!@#$");

echo $usuario;*/

$usuario = new Usuario();

$usuario->loadById(6);
$usuario->delete();

echo $usuario;

?>