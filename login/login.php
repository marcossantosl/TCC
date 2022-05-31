<?php
require("../config.php")
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="../css/main.css" />

    <title>Marketing Website</title>
</head>

<body>

    <!-- LOGIN -->
    <div class="container containerAcesso">
        <div class="row boxLogin">
            <div class="col-lg-6 col-md-6 align-self-center mb-md-0 mb-">
                <h2 class="mb-3"> Crie um novo cadastro </h2>
                <p class="mb-4"> Se caso você for um aluno do ifc-cas, cadastre-se no site para ter acesso as funcionalidades
                </p>
                <button type="button" class="btn btn-primary botao1" href="..cadastro/cadastro.php">Cadastre-se</button>
            </div>

            <div class="col-lg-6 col-md-6 align-self-center mb-md-0 mb-4">
                <h2 class="mb-4 justify-content-center">Entre</h2>

                <?php
                session_start();

                if (isset($_SESSION['aviso!'])) {
                    echo $_SESSION['aviso!'];
                    $_SESSION['aviso!'] = '';
                }

                if (isset($_SESSION['avisoLogin!'])) {
                    echo $_SESSION['avisoLogin!'];
                    $_SESSION['avisoLogin!'] = '';
                }
                ?>

                <form method="POST" action="recebeLogin.php">
                    <div class=" mb-4">
                        <label class="form-label"></label>
                        <input type="text" class="form-control" placeholder="usuário" name="user">
                    </div>
                    <div class="mb-4">
                        <label class="form-label"></label>
                        <input type="password" placeholder="senha" class="form-control" name="senha">
                        <input type="submit" class="btn btn-primary " value="entrar">
                    </div>
                </form>
            </div>
        </div>
        <!-- //LOGIN -->
    </div>

</body>

</html>