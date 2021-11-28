<?php

require_once("sqlMotoboy.php");
$bd = new Bd();

$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$telefone = $_POST["telefone"];

        
$bd->inserirMotoboy($nome, $cpf, $telefone);

echo '<script> alert ("Motoboy cadastrado com sucesso!!!"); location.href=("./index.php")</script>';
//echo "<script type='javascript'>alert('Motoboy cadastrado com sucesso!!')";
//echo"<a href=\"index.php\">Voltar.</a><br>";

?>

