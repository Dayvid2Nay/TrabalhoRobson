<?php
require_once("sqlCategoria.php");

$bd = new Bd();

$categoria = $bd->buscarCategorias();


foreach ($categoria as $row){
    foreach($row as $key => $value){

        if($key=="idCategoria")$idCategoria=$value;

        echo"<h1>$key:$value</h1>";
    }
    echo"<a href=\"Categoria.php?id=$idCategoria\">Ver Categoria</a><br>";
    echo"======================";
}

?>

<br><br><br>
<a href="editarCategoria.html">Editar um Categoria</a><br><br>
<form action="inserirCategoria.php" method="POST">
<label>nome:</label><input type="text" name="nome"><br><br>
<input type="submit" value="Cadastar">
</form>
