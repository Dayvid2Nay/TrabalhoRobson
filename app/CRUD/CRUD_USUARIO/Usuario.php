<?php

require_once("sqlUsuarios.php");
$bd = new Bd();

$id = $_GET["id"];

$Usuarios = $bd->buscarUsuario($id);

foreach ($Usuarios as $row){
    foreach($row as $key => $value){
        if($key=="idPessoa")$idPessoa=$value;
        echo"<h1>$key:$value</h1>";
    }
    echo"<br><br>";
    echo"<a href=\"excluirUsuario.php?id=$idPessoa\">Excluir Usuario!</a><br>";
    echo"<a href=\"index.php\">Voltar.</a><br>";
}

?>
