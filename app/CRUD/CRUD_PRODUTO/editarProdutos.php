<?php

require_once("sqlProdutos.php");

$bd = new Bd();

$id = $_POST["id"];
$quantidade = $_POST["quantidade"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$nome = $_POST["nome"];

$bd->editarProduto($id,$quantidade,$descricao,$preco,$nome);

echo '<script> alert ("Produto Alterado com sucesso!!!"); location.href=("./index.php")</script>';
//echo"<h1>Produto Alterado com sucesso!</h1>"

?>
