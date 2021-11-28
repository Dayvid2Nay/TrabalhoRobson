<?php 
require_once("sqlUsuarios.php");

$bd = new Bd();

$emailForm = $_POST["email"];
$senhaForm = $_POST["senha"];

$Usuario = $bd->buscarUsuarioEmail($email);

var_dump($Usuario);

// foreach ($Usuario as $row) {
//     foreach ($row as $key => $value) {
//         if($key=="email"){
            
//         }
//     }
// }

?>
