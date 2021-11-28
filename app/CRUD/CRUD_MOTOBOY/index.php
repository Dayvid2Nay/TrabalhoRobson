<?php
require_once("sqlMotoboy.php");

$bd = new Bd();

$motoboy = $bd->buscarMotoboys();

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../css/style.css">
    <title>Document</title>
</head>
<?php
include('./../../../paginas/layout/cabecalho.php');
?>
<body>
<main>
    <div class="container">
    <a href="./../../../paginas/cadastros/cadastroMotoboy.php" class="btn btn-primary">Cadastrar Motoboy</a>
        <div class="mt-4 table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($motoboy as $key){
                         $idMotoboy=$key["idMotoboy"];
                         $nome=$key["nome"];
                         $cpf=$key["cpf"];
                         $telefone=$key["telefone"];

                         echo"<tr>";
                         echo" <td scope='row'>$nome</td>";
                         echo" <td scope='row'>$cpf</td>";
                         echo" <td scope='row'>$telefone</td>";
                         echo" <td scope='row'><a href=\"motoboy.php?id=$idMotoboy\">Ver Motoboy</a><br>
                         <a href=\"excluirMotoboy.php?id=$idMotoboy\">Excluir</a><br></td>";

                         echo"</tr>";
                    
                }
                    ?>

                </tbody>
            </table>
        </div>
</main>
<script src="../../../js/bootstrap.min.js"></script>
<script src="../../../js/jquery.js"></script>
<script src="../.././js/effects.js"></script>
</body>
<?php
include('../../../paginas/layout/rodape.php');
?>