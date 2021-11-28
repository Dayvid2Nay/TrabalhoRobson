<?php

require_once("sqlUsuarios.php");
$bd = new Bd();

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$tipo = $_POST["tipo"];

        
$bd->inserirUsuario($nome,$email,$senha,$tipo);

echo"<h1>Usuario cadastrado com sucesso!</h1><br>";
echo"<a href=\"index.php\">Voltar.</a><br>";

?>

