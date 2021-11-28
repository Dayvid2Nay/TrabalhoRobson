<?php
require_once("sqlCategoria.php");

$id = $_GET["id"];

$bd = new Bd();

$bd->excluirCategoria($id);

echo("Categoria excluida!<br>");
echo"<a href=\"index.php\">Voltar.</a><br>";
?>
