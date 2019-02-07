<?php 

require_once("config.php");

/*$sql = new Sql();

//$usuarios = $sql->select("SELECT * FROM tb_usuarios");

//echo json_encode($usuarios);

//Carrega um usuário
$root = new Usuario();
$root->loadById(2);
echo $root;


//Carrega uma lista de usuários
$lista = Usuario::getList();
echo json_encode($lista);


//Carrega uma lista de usuários buscando pelo Login
$search = Usuario::search("o");
echo json_encode($search);


//Carrega um usuário usando o login e a senha
$usuario = new Usuario();
$usuario->login("user", "123456");
echo $usuario;


$aluno = new Usuario();
$aluno->setDeslogin("Aluno");
$aluno->setDessenha("@lun0");
$aluno->insert();
echo $aluno;

$aluno = new Usuario("AlunoNew", "@lun0New");
$aluno->insert();
echo $aluno;


$usuario = new Usuario();
$usuario->loadById(7);
$usuario->update("professor", "@Prof34#new");
echo $usuario;
*/ 

$usuario = new Usuario();
$usuario->loadById(5);
$usuario->delete();
echo $usuario;


?>