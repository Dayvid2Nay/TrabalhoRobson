<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Document</title>
</head>
<body>
<?php
    include('../layout/cabecalho.php');
?>
<main>
<div class="container">
        <h1 class="text-center">Cadastro de Motoboy</h1>
        <form action="../../app/CRUD/CRUD_MOTOBOY/inserirMotoboy.php" method="post">
            <input type="hidden" name="id" value="">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-4">
                    <div class="form-group">
                        <label for="nomeCompleto">Nome Completo:*</label>
                        <input type="text" class="form-control" name="nome" id="nomeCompleto"
                            placeholder="Nome Completo" value="" required>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="form-group">
                        <label for="cpf">CPF:*</label>
                        <input type="text" value="" class="form-control" name="cpf"
                            id="cpf" placeholder="CPF" required>
                    </div>
                </div>   
                <div class="col-12 col-md-3">
                    <div class="form-group">
                        <label for="celular">Celular:*</label>
                        <input type="text" value="" class="form-control"
                            name="telefone" id="telefone" placeholder="(00) 0 0000-0000" required>
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
    include('../layout/rodape.php');
?>