<?php

require_once("sqlUsuarios.php");
$bd = new Bd();

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$endereco =$_POST["endereco"];
$cpf =$_POST["cpf"];
$telefone =$_POST["telefone"];
$tipo =$_POST["tipo"];


        
$bd->inserirUsuario($nome,$email,$senha,$endereco, $cpf, $telefone, $tipo);

echo"<h1>Usuario cadastrado com sucesso!</h1><br>";
echo"<a href=\"index.php\">Voltar.</a><br>";

?>

