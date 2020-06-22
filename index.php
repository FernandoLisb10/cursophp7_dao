<?php 

require_once("config.php");

// Código comentado falta econtrar o erro! 
//Código carrega um usuário!
//$user = new Usuario();
//$user->loadbyId(3);
//echo $user;

//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

//carrega uma lista de usuários
$lista = Usuario::getList();
echo json_encode($lista);

//Carrega uma lista de usuário buscando pelo login
//$search = Usuario::search("us");
//echo json_encode($search);


//carrega um usuário o login e a senha
//$usuario = new Usuario();
//$usuario->login("user","123");
//echo $usuario;


?>


