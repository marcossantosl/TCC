<!DOCTYPE html>

<?php
require("../php/config.php");
?>

<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="../assets/css/main.css" />

    <script src="https://kit.fontawesome.com/9884a810af.js" crossorigin="anonymous"></script>

    <title>Cadastro</title>
</head>

<body>



    <!-- CADASTRO -->
    <div class="container containerAcesso">
        <div>
            <div>
                <h2 class=""> Bem vindo de volta </h2>
                <p class=""> Conecte sua conta agora</p>
                <div class="button">
                    <input type="button" class="buttons" onclick="location.href='login.php';" value="Entrar" />
                </div>
            </div>
        </div>

        <div>
            <h2> Crie sua conta </h2>
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

            <form method="POST" action="../php/recebecadastro.php">
                <div class="formCad">
                    <div class="input">
                        <i class="fa fa-user-graduate"></i>
                        <input type="text" placeholder="nome completo" name="nome">
                    </div>
                    <div class="input">
                        <i class="fa-regular fa-user"></i>
                        <input type="text" placeholder="usuário" name="user">
                    </div>
                    <div class="input">
                        <i class="fa-regular fa-envelope"></i>
                        <input type="email" placeholder="email" name="email">
                    </div>
                    <div class="input">
                        <i class="fa fa-lock"></i>
                        <input type="password" placeholder="senha" name="password">
                    </div>
                    <div class="input">
                        <i class="fa fa-lock"></i>
                        <input type="password" placeholder="repita a senha" name="rpassword">
                    </div>
                    </p>
                    <br>
                    <div class="button">
                        <input class="buttons" type="submit" value="cadastrar">
                    </div>
                </div>
            </form>
        </div>

    </div>
    <!-- //CADASTRO -->
</body>

</html>