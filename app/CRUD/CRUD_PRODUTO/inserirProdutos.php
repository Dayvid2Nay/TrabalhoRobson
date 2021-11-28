<?php

require_once("sqlProdutos.php");
$bd = new Bd();

$quantidade = $_POST["quantidade"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
//$nome = $_POST["nome"];

$bd->inserirProduto($quantidade,$descricao,$preco/*,$nome*/);

echo"<h1>Produto cadastrado com sucesso!</h1><br>";
echo"<a href=\"index.php\">Voltar.</a><br>";

?>

