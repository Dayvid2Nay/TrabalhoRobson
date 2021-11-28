<?php
require_once("sqlProdutos.php");

$bd = new Bd();

$produtos = $bd->buscarProdutos();


foreach ($produtos as $row){
    foreach($row as $key => $value){

        if($key=="idProduto")$idProduto=$value;

        echo"<h1>$key:$value</h1>";
    }
    echo"<a href=\"produto.php?id=$idProduto\">Ver Produto</a><br>";
    echo"======================";
}

?>

<br><br><br>
<form action="inserirProdutos.php" method="POST">
<label>quantidade:</label><input type="number" name="quantidade"><br><br>
<label>descricao:</label><input type="text" name="descricao"><br><br>
<label>preco:</label><input type="text" name="preco"><br><br>
<!-- <label>categoria:</label><input type="text" name="nome"><br><br> !-->
<input type="submit" value="Cadastar">
</form>

