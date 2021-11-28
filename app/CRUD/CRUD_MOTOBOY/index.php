<?php
require_once("sqlMotoboy.php");

$bd = new Bd();

$motoboy = $bd->buscarMotoboys();


foreach ($motoboy as $row){
    foreach($row as $key => $value){

        if($key=="idMotoboy")$idMotoboy=$value;

        echo"<h1>$key:$value</h1>";
    }
    echo"<a href=\"motoboy.php?id=$idMotoboy\">Ver Motoboy</a><br>";
    echo"======================";
}

?>

<br><br><br>
<a href="editarMotoboy.html">Editar um Motoboy</a><br><br>
<form action="inserirMotoboy.php" method="POST">
<label>nome:</label><input type="text" name="nome"><br><br>
<label>cpf:</label><input type="text" name="cpf"><br><br>
<label>telefone:</label><input type="text" name="telefone"><br><br>
<input type="submit" value="Cadastar">
</form>
