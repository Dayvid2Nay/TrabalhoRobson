<?php

require_once("sqlPedidos.php");

$bd = new Bd();

$id = $_POST["id"];
$data = $_POST["data"];
$valor = $_POST["valor"];


$bd->editarPedido($id,$data, $valor);

echo"<h1>Pedido Alterado com sucesso!</h1>";
echo"<a href=\"index.php\">Voltar.</a><br>";

?>
