<?php

require_once("sqlPedidos.php");
$bd = new Bd();


$data = $_POST["data"];
$valor = $_POST["valor"];

        
$bd->inserirPedido($data, $valor);

echo"<h1>Pedido cadastrado com sucesso!</h1><br>";
echo"<a href=\"index.php\">Voltar.</a><br>";

?>

