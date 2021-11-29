<?php
require_once("sqlProdutos.php");

$bd = new Bd();

$produtos = $bd->buscarProdutos();
 

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
    <a href="./../../../paginas/cadastros/cadastroProduto.php" class="btn btn-primary">Cadastrar Produto</a>
        <div class="mt-4 table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Preço</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($produtos as $key){
                         $idProduto=$key["idProduto"];
                         $nome=$key["nome"];
                         $quantidade=$key["quantidade"];
                         $descricao=$key["descricao"];
                         $preco=$key["preco"];

                         echo"<tr>";
                         echo" <td scope='row'>$nome</td>";
                         echo" <td scope='row'>$descricao</td>";
                         echo" <td scope='row'>$quantidade</td>";
                         echo" <td scope='row'>$preco</td>";
                         echo" <td scope='row'><a href=\"produto.php?id=$idProduto\">Ver Produto</a><br>
                         <a href=\"excluirProdutos.php?id=$idProduto\">Excluir</a><br></td>";

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

