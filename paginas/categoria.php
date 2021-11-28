<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
<?php
    include('./layout/cabecalho.php');
?>
<main>
<div class="container">
        <h1 class="text-center">Cadastro de Categoria</h1>
        <form action="" method="post">
            <input type="hidden" name="id" value="">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-4">
                    <div class="form-group">
                        <label for="nomeCompleto">Categoria:*</label>
                        <input type="text" class="form-control" name="nome" id="nomeCompleto"
                            placeholder="Nome Completo" value="" required>
                    </div>
                </div>
                <div class="col-12 col-md-3 p-4" style="float: right;">
                     <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
                </div>
            </div>
        </form>
    </div>
</main>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.js"></script>
    <script src="../js/effects.js"></script>
</body>
<?php
    include('./layout/rodape.php');
?>