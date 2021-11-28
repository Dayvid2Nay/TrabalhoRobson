<?php
require_once("sqlPedidos.php");

$id = $_GET["id"];

$bd = new Bd();

$bd->excluirPedido($id);

echo("Pedido excluido!<br>");
echo"<a href=\"index.php\">Voltar.</a><br>";
?>
