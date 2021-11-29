<?php

require_once("sqlProdutos.php");
$bd = new Bd();

$id = $_GET["id"];

$produto = $bd->buscarProduto($id);

if(isset($id)){
    $produto = $bd->buscarProduto($id);
    
    foreach ($produto as $key){
        $idProduto=$key["idProduto"];
        $nome=$key["nome"];
        $quantidade=$key["quantidade"];
        $descricao=$key["descricao"];
        $preco=$key["preco"];
    }
}
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
        <h1 class="text-center">Cadastro de Produto</h1>
        <form action="../CRUD_PRODUTO/editarProdutos.php" method="POST">
            <input type="hidden" name="id" value="<?php if(isset($idProduto)){echo $idProduto;}; ?>">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-4">
                    <div class="form-group">
                    <label for="descricao">Nome:*</label>
                        <input type="text" value="<?php if(isset($nome)){echo $nome;}; ?>" class="form-control" name="nome"
                            id="nome" placeholder="" required>
                    </div>
                </div>
               
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="descricao">Descrição:*</label>
                        <input type="text" value="<?php if(isset($descricao)){echo $descricao;}; ?>" class="form-control" name="descricao"
                            id="descricao" placeholder="" required>
                    </div>
                </div>  
                </div>
                <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-3">
                    <div class="form-group">
                        <label for="quantidade">Quantidade:*</label>
                        <input type="number" class="form-control" name="quantidade" id="quantidade"
                            placeholder="" value="<?php if(isset($quantidade)){echo $quantidade;}; ?>" required>
                    </div>
                </div> 
                <div class="col-12 col-md-5">
                    <div class="form-group">
                        <label for="preco">Preço:*</label>
                        <input type="text" value="<?php if(isset($preco)){echo $preco;}; ?>" class="form-control"
                            name="preco" id="preco" placeholder="R$" required>
                    </div>
                </div>
                </div>
                <div class="col-12 col-md-3 p-5" style="float: right;">
                     <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
                </div>
            </div>
        </form>
    </div>
    </main>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/jquery.js"></script>
    <script src=".././js/effects.js"></script>
</body>
<?php
include('../../../paginas/layout/rodape.php');
?>
