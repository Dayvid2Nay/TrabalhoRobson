<?php

require_once("sqlMotoboy.php");
$bd = new Bd();

$id = $_GET["id"];

$motoboy = $bd->buscarMotoboy($id);

foreach ($motoboy as $row){
    foreach($row as $key => $value){
        if($key=="idMotoboy")$idMotoboy=$value;
        echo"<h1>$key:$value</h1>";
    }
    echo"<br><br>";
    echo"<a href=\"excluirMotoboy.php?id=$idMotoboy\">Excluir Motoboy!</a><br>";
    echo"<a href=\"index.php\">Voltar.</a><br>";
}

?>
