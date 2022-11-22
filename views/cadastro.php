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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
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
            <p class="session-acesso">
                <?php
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
            </p>
            <h2> Crie sua conta </h2>
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
                    <div class="select areas">
                        <label> Você possuí deficiência visual? </label>
                        <select class="select form-control select2 select2-hidden-accessible" name="deficiencia">
                            <option value="1">Sim</option>
                            <option selected value="0">Não</option>
                        </select>
                    </div>
                    <div class="button">
                        <input class="buttons" type="submit" value="cadastrar">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
    <script src="https://kit.fontawesome.com/9884a810af.js" crossorigin="anonymous"></script>
</body>

</html>