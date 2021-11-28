<?php

require_once("sqlUsuarios.php");

$bd = new Bd();

$id = $_POST["id"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$tipo = $_POST["tipo"];


$bd->editarUsuario($id,$nome, $email, $senha, $tipo);

echo"<h1>Usuario Alterado com sucesso!</h1>";
echo"<a href=\"index.php\">Voltar.</a><br>";

?>
