<?php

require_once("sqlCategoria.php");
$bd = new Bd();

$nome = $_POST["nome"];
 
$bd->inserirCategoria($nome);

echo"<h1>Categoria cadastrado com sucesso!</h1><br>";
echo"<a href=\"index.php\">Voltar.</a><br>";

?>

