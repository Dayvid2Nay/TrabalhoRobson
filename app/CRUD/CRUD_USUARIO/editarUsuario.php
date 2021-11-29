<?php

require_once("sqlUsuarios.php");

$bd = new Bd();

$id = $_POST["id"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$endereco =$_POST["endereco"];
$cpf =$_POST["cpf"];
$telefone =$_POST["telefone"];
$tipo =$_POST["tipo"];


$bd->editarUsuario($id,$nome, $email, $senha, $endereco, $cpf, $telefone, $tipo);

echo '<script> alert (">Usuario Alterado com sucesso!!!"); location.href=("./index.php")</script>';
//echo"<h1>Usuario Alterado com sucesso!</h1>";
//echo"<a href=\"index.php\">Voltar.</a><br>";

?>
