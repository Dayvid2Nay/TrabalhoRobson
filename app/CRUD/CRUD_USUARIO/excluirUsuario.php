<?php
require_once("sqlUsuarios.php");

$id = $_GET["id"];

$bd = new Bd();

$bd->excluirUsuario($id);

echo '<script> alert ("Usuario excluido!!!"); location.href=("./index.php")</script>';
//echo("Usuario excluido!<br>");
//echo"<a href=\"index.php\">Voltar.</a><br>";
?>
