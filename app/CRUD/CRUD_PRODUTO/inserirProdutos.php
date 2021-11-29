<?php

require_once("sqlProdutos.php");
$bd = new Bd();

$quantidade = $_POST["quantidade"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$nome = $_POST["nome"];

$bd->inserirProduto($quantidade,$descricao,$preco,$nome);

echo '<script> alert ("Produto cadastrado com sucesso!!!"); location.href=("./index.php")</script>';
//echo"<h1>Produto cadastrado com sucesso!</h1><br>";
//echo"<a href=\"index.php\">Voltar.</a><br>";

?>

