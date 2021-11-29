<?php 
require_once("sqlUsuarios.php");

$bd = new Bd();

$email = "raphaelmalta@gmail.com";
$senha = "123456";
$id;

$Usuario = $bd->login($email);
$senhabd;

var_dump($Usuario);

if(!empty($Usuario)){
    foreach ($Usuario as $row) {
        foreach ($row as $key => $value) {
            if($key == "senha"){
               $senhabd = $value;
            }
            if($key == "idPessoa"){
                $id = $value;
             }
        }
    }
    if($senha == $senhabd){
        echo "<h1>Logado</h1>";
    }else{
        echo "<h1>Erro</h1>";
    }
    
}else{
    echo "<h1>Erro</h1>";
}

?>
