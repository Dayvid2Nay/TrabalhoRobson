<?php 
require_once("sqlUsuarios.php");

$bd = new Bd();

                    session_start();
                


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
<div class="login-form">
    <form action="loginPDO.php" method="post">
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-4 p-2">
            <input type="text" class="form-control" placeholder="Email" required="required" name="email" >
        </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-4 p-2">
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Senha" required="required" name="senha">
        </div>
        </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-4 p-2">
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" value="login" name="login">Logar</button>
        </div> 
        <?php
						
						if (isset($_POST["login"])) {
                            if(isset($_POST["email"])){
							$loginEmail = $_POST["email"];
                            }
							$loginPassword = $_POST["senha"];
							$verifica = $bd->login($loginEmail,$loginPassword);
                            //var_dump($verifica);
							if ($verifica==false){
								echo '<script> alert ("Usuario/Senha Incorretos!!!");</script>';
							} else {
                                
                                foreach ($verifica as $key){
                                    $idPessoa=$key["idPessoa"];
                                    $nome=$key["nome"];
                                }
								$_SESSION['nome'] = $nome;
								$_SESSION['idUsuario'] = $idPessoa;
                                echo '<script> alert ("Logado com sucesso!!!");location.href=("./loginPDO.php")</script></script>';
							}
						}
						?>
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