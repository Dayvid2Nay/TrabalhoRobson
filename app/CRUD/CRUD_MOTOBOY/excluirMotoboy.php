<?php
require_once("sqlMotoboy.php");

$id = $_GET["id"];

$bd = new Bd();

$bd->excluirMotoboy($id);

echo("Motoboy excluido!<br>");
echo"<a href=\"index.php\">Voltar.</a><br>";
?>
