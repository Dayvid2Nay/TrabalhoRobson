<?php

require_once("sqlProdutos.php");
$bd = new Bd();

$id = $_GET["id"];

$produto = $bd->buscarProduto($id);

foreach ($produto as $row){
    foreach($row as $key => $value){
        if($key=="idProduto")$idProduto=$value;
        echo"<h1>$key:$value</h1>";
    }
    echo"<br><br>";
    echo"<a href=\"excluirProdutos.php?id=$idProduto\">Excluir Produto!</a><br>";
    echo"<a href=\"index.php\">Voltar.</a><br>";
}

?>
