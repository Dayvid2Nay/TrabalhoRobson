<?php
require_once("sqlUsuarios.php");

$bd = new Bd();

$usuario = $bd->buscarUsuarios();

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
    <a href="./../../../paginas/cadastros/cadastroUsuario.php" class="btn btn-primary">Cadastrar Usuario</a>
        <div class="mt-4 table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Endereco</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($usuario as $key){
                         $idPessoa=$key["idPessoa"];
                         $email=$key["email"];
                         $nome=$key["nome"];
                         $cpf=$key["cpf"];
                         $telefone=$key["telefone"];
                         $endereco=$key["endereco"];
                         $tipo=$key["tipo"];

                         echo"<tr>";
                         echo" <td scope='row'>$nome</td>";
                         echo" <td scope='row'>$email</td>";
                         echo" <td scope='row'>$cpf</td>";
                         echo" <td scope='row'>$endereco</td>";
                         echo" <td scope='row'>$telefone</td>";
                         echo" <td scope='row'>$tipo</td>";
                         echo" <td scope='row'><a href=\"Usuario.php?id=$idPessoa\">Ver Produto</a><br>
                         <a href=\"excluirUsuario.php?id=$idPessoa\">Excluir</a><br></td>";

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

