<?php
require_once("sqlUsuarios.php");

$bd = new Bd();

$usuario = $bd->buscarUsuarios();


foreach ($usuario as $row){
    foreach($row as $key => $value){

        if($key=="idPessoa")$idPessoa=$value;

        echo"<h1>$key:$value</h1>";
    }
    echo"<a href=\"Usuario.php?id=$idPessoa\">Ver Produto</a><br>";
    echo"======================";
}

?>

<br><br><br>
<a href="editarUsuario.html">Editar um Usuario</a><br><br>
<form action="inserirUsuario.php" method="POST">
<label>nome:</label><input type="text" name="nome"><br><br>
<label>email:</label><input type="text" name="email"><br><br>
<label>senha:</label><input type="text" name="senha"><br><br>
<label>endereco:</label><input type="text" name="endereco"><br><br>
<label>cpf:</label><input type="text" name="cpf"><br><br>
<label>telefone:</label><input type="text" name="telefone"><br><br>
<label>tipo:</label><input type="number" name="tipo"><br><br>
<input type="submit" value="Cadastar">
</form>
