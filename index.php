<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>

<?php
    include('./paginas/layout/cabecalho.php');
?>
    <header>
        <div class="logo">
            <img src="./img/logo.png">
        </div>
    </header>
    <main>
        <div class="container">
            <h1 class="text-center">Cadastro de Usuários</h1>
            <form action="" method="post">
                <input type="hidden" name="id" value="">
                <div class="row d-flex justify-content-center">
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="nomeCompleto">Nome Completo:*</label>
                            <input type="text" class="form-control" name="nome" id="nomeCompleto"
                                placeholder="Nome Completo" value="{{ $usuario->usuario->nome ?? old('nome') }}" required>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="form-group">
                            <label for="cpf">CPF:*</label>
                            <input type="text" value="{{ $usuario->usuario->cpf ?? old('cpf') }}" class="form-control" name="cpf"
                                id="cpf" placeholder="CPF" required>
                            @if ($errors->has('cpf'))
                                <div class="alert alert-danger mt-1">{{ $errors->first('cpf') }}</div>
                            @endif
                        </div>
                    </div>    
                </div>
                <div class="row d-flex justify-content-center">
                     <div class="col-12 col-md-2">
                        <div class="form-group">
                    <div class="col-12 col-md-3">
                        <div class="form-group">
                            <label for="celular">Celular:*</label>
                            <input type="text" value="{{ $usuario->usuario->celular ?? old('celular') }}" class="form-control"
                                name="celular" id="celular" placeholder="(00) 0 0000-0000" required>
                        </div>
                    </div>
    
                   
                </div>
                <div class="row mb-4 row justify-content-center">
                     <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="email">Email:*</label>
                            <input type="email" value="{{ $usuario->email ?? old('email') }}" class="form-control"
                                name="email" id="email" placeholder="nome@exemplo.com" required>
                        </div>
                    </div>
                </div>
                <div class="row mb-4 row justify-content-center">
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="senha">Senha:*</label>
                            <input type="password" value="{{ $usuario->senha ?? '' }}" class="form-control" name="senha"
                                id="senha" required>
                                @if ($errors->has('senha'))
                                <div class="alert alert-danger mt-1">{{ $errors->first('senha') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="senha">Confirmar senha:*</label>
                            <input type="password" value="{{ $usuario->senha ?? '' }}" class="form-control" name="senhaC"
                                id="senhaC" required>

                        </div>
                    </div>
                </div>
                <div class="row mb-4 row justify-content-center">
                    <div class="col-12 col-md-4 float-right p-1" style="text-align: right;"> 
                        <a href="" class="btn btn-outline-primary btn-block">Lista de Usuários</a>
                    </div>
                    <div class="col-12 col-md-4 p-1 " style="text-align: left;">
                         <button type="submit" class="btn btn-primary btn-block" onclick="return validarSenha()">Cadastrar</button>
                    </div>
                </div>
            </form>
        </div>
    </main><
        
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.js"></script>
    <script src="../js/effects.js"></script>
</body>

    

<?php
    include('./paginas/layout/rodape.php');
?>
</html>