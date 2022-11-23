<?php
require("../php/config.php");
session_start();
if ($_SESSION['id']) {
    header('location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="../assets/css/main.css" />

    <script src="https://kit.fontawesome.com/9884a810af.js" crossorigin="anonymous"></script>

    <title>login</title>
</head>

<body>

    <!-- LOGIN -->
    <div class="container">
        <div class="containerAcesso">
            <div class="msg">
                <h2>cadastre-se </h2>
                <p>Cadastre-se no site para ter acesso as funcionalidades</p>
                <input type="button" class="buttons" onclick="location.href='cadastro.php';" value="Cadastre-se" />

            </div>
            <div id="right-login">
                <div class="card-login">
                    <p class="session-acesso">
                        <?php

                        if (isset($_SESSION['avisoLogin'])) {
                            echo $_SESSION['avisoLogin'];
                            $_SESSION['avisoLogin'] = '';
                        }
                        if (isset($_SESSION['logout'])) {
                            echo $_SESSION['logout'];
                            $_SESSION['logout'] = '';
                        }

                        if (isset($_SESSION['senha'])) {
                            echo $_SESSION['senha'];
                            $_SESSION['senha'] = '';
                        }
                        if (isset($_SESSION['aviso'])) {
                            echo $_SESSION['aviso'];
                            $_SESSION['aviso'] = '';
                        }

                        ?>
                    </p>
                    <div class="button-acess">
                        <button class="back-button btn btn-dark" onclick="location.href='index.php';">Voltar</button>
                    </div>
                    <h2 class="title">Entre</h2>
                    <form method="POST" action="../php/recebeLogin.php">
                        <div class="input">
                            <i class="fa-regular fa-user"></i>
                            <input type="text" placeholder="usuário ou email" name="user">
                        </div>
                        <div class="input">
                            <i class="fa fa-user-lock"></i>
                            <input type="password" placeholder="senha" name="senha">
                        </div>
                        <div class="button">
                            <input class="buttons" type="submit" value="Entrar">


                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- //LOGIN -->
    </div>

</body>

</html>