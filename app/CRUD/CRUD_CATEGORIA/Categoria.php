<?php

require_once("sqlCategoria.php");
$bd = new Bd();

$id = $_GET["id"];

$categoria = $bd->buscarCategoria($id);

foreach ($categoria as $row){
    foreach($row as $key => $value){
        if($key=="idCategoria")$idCategoria=$value;
        echo"<h1>$key:$value</h1>";
    }
    echo"<br><br>";
    echo"<a href=\"excluirCategoria.php?id=$idCategoria\">Excluir Categoria!</a><br>";
    echo"<a href=\"index.php\">Voltar.</a><br>";
}

?>
