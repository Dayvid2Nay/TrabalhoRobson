<?php
require_once("sqlProdutos.php");

$id = $_GET["id"];

$bd = new Bd();

$bd->excluirProduto($id);

echo("Produto excluido!<br>");
echo"<a href=\"index.php\">Voltar.</a><br>";
?>
