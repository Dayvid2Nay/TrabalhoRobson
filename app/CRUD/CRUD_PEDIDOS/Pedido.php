<?php

require_once("sqlPedidos.php");
$bd = new Bd();

$id = $_GET["id"];

$pedido = $bd->buscarPedido($id);

foreach ($pedido as $row){
    foreach($row as $key => $value){
        if($key=="idPedido")$idPedido=$value;
        echo"<h1>$key:$value</h1>";
    }
    echo"<br><br>";
    echo"<a href=\"excluirPedido.php?id=$idPedido\">Excluir Pedido!</a><br>";
    echo"<a href=\"index.php\">Voltar.</a><br>";
}

?>
