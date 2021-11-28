<?php

require_once("sqlProdutos.php");

$bd = new Bd();

$id = $_POST["id"];
$quantidade = $_POST["quantidade"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];

$bd->editarProduto($id,$quantidade,$descricao,$preco);

echo"<h1>Produto Alterado com sucesso!</h1>"

?>
