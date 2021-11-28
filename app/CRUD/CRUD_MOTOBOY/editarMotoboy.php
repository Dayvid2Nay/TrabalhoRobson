<?php

require_once("sqlMotoboy.php");

$bd = new Bd();

$id = $_POST["id"];
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$telefone = $_POST["telefone"];


$bd->editarMotoboy($id,$nome, $cpf, $telefone);

echo"<h1>Motoboy Alterado com sucesso!</h1>";
echo"<a href=\"index.php\">Voltar.</a><br>";

?>
