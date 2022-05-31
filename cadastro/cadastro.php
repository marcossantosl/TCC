<!DOCTYPE html>

<?php
require("../config.php")
?>

<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="../css/main.css" />

    <title>Marketing Website</title>
</head>

<body>



    <!-- CADASTRO -->
    <div class="container containerAcesso">
        <div class="row mb-4  justify-content-center align-self-center">
            <div class="col-lg-6 col-md-6 align-self-center mb-md-0 mb-4">
                <h2 class="mb-3"> Bem vindo de volta </h2>
                <p class="mb-4"> Conecte sua conta agora</p>
                <button type="button" class="btn btn-primary botao1" href="../login/login.php">entrar</button>
            </div>

            <div class="col-lg-6 col-md-6 align-self-center mb-md-0 mb-4">
                <h2 class="mb-4 justify-content-center"> Crie sua conta </h2>

                <?php
                session_start();

                if (isset($_SESSION['aviso!'])) {
                    echo $_SESSION['aviso!'];
                    $_SESSION['aviso!'] = '';
                }

                if (isset($_SESSION['avisoSenha!'])) {
                    echo $_SESSION['avisoSenha!'];
                    $_SESSION['avisoSenha!'] = '';
                }

                if (isset($_SESSION['avisoUser!'])) {
                    echo $_SESSION['avisoUser!'];
                    $_SESSION['avisoUser!'] = '';
                }
                ?>

                <form method="POST" action="recebecadastro.php">
                    <div class="mb-4">
                        <label class="form-label"></label>
                        <input type="text" class="form-control" placeholder="nome completo" name="nome">
                    </div>
                    <div class="mb-4">
                        <label class="form-label"></label>
                        <input type="text" class="form-control" placeholder="usuário" name="user">
                    </div>
                    <div class="mb-4">
                        <label class="form-label"></label>
                        <input type="email" placeholder="email" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"></label>
                        <input type="password" placeholder="senha" class="form-control" name="password">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"></label>
                        <input type="password" placeholder="repita a senha" class="form-control" name="rpassword">
                    </div>
                    <input type="submit" value="cadastrar" class="btn btn-primary">
                </form>

            </div>
        </div>
        <!-- //CADASTRO -->

    </div>

</body>

</html>