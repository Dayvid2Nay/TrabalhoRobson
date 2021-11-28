<?php

require_once("sqlCategoria.php");

$bd = new Bd();

$id = $_POST["id"];
$nome = $_POST["nome"];

$bd->editarCategoria($id,$nome);

echo"<h1>Categoria Alterado com sucesso!</h1>";
echo"<a href=\"index.php\">Voltar.</a><br>";

?>
