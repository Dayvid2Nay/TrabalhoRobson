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
        <h1 class="text-center">Cadastro de Usuario</h1>
        <form action="inserirUsuario.php" method="POST">
            <input type="hidden" name="id" value="">
            <div class="row d-flex justify-content-center">

                <div class="col-12 col-md-4">
                    <div class="form-group">
                        <label for="nome">Nome :*</label>
                        <input type="text" class="form-control" name="nome" id="nomeUsuario"
                            placeholder="Nome Usuario" value="" required>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="form-group">
                        <label for="email">Email:*</label>
                        <input type="text" value="" class="form-control" name="email"
                            id="email" placeholder="Email" required>
                    </div>
                </div>   
                <div class="col-12 col-md-3">
                    <div class="form-group">
                        <label for="senha">Senha:*</label>
                        <input type="text" value="" class="form-control"
                            name="senha" id="senha" placeholder="***********" required>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="form-group">
                        <label for="endereco">Endereco:*</label>
                        <input type="text" value="" class="form-control"
                            name="endereco" id="endereco" placeholder="Rua Dr. Exemplo..." required>
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
                            name="celular" id="celular" placeholder="(00) 0 0000-0000" required>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="form-group">
                        <label for="tipo">Tipo:*</label>
                        <input type="number" value="" class="form-control"
                            name="tipo" id="tipo" placeholder="1 or 0" required>
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
