<?php
require("../php/config.php")
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="../assets/css/main.css" />

    <script src="https://kit.fontawesome.com/9884a810af.js" crossorigin="anonymous"></script>

    <title>login</title>
</head>

<body>

    <!-- LOGIN -->
    <div class="container containerAcesso">
        <div class="left-login">
            <h2> Crie um novo cadastro </h2>
            <p>Cadastre-se no site para ter acesso as funcionalidades</p>
            <input type="button" class="buttons" onclick="location.href='cadastro.php';" value="Cadastre-se" />

        </div>
        <div id="right-login">
            <div class="card-login">
                <h2 class="title">Entre</h2>

                <?php
                session_start();

                if (isset($_SESSION['avisoLogin!'])) {
                    echo $_SESSION['avisoLogin!'];
                    $_SESSION['avisoLogin!'] = '';
                }

                if (isset($_SESSION['senha!'])) {
                    echo $_SESSION['senha!'];
                    $_SESSION['senha!'] = '';
                }

                ?>

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
        <!-- //LOGIN -->
    </div>

</body>

</html>