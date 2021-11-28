<?php
require_once("sqlPedidos.php");

$bd = new Bd();

$pedido = $bd->buscarPedidos();


foreach ($pedido as $row){
    foreach($row as $key => $value){

        if($key=="idPedido")$idPedido=$value;

        echo"<h1>$key:$value</h1>";
    }
    echo"<a href=\"Pedido.php?id=$idPedido\">Ver Pedido</a><br>";
    echo"======================";
}

?>

<br><br><br>
<a href="editarPedido.html">Editar um Pedido</a><br><br>
<form action="inserirPedido.php" method="POST">
<label>data:</label><input type="text" name="data"><br><br>
<label>valor:</label><input type="text" name="valor"><br><br>
<input type="submit" value="Cadastar">
</form>