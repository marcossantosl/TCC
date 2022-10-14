<?php
require('../php/config.php');
require('../php/getusers.php');
require('header.php');
?>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="../assets/css/main.css" />

    <script src="https://kit.fontawesome.com/9884a810af.js" crossorigin="anonymous"></script>

    <title>Marketing Website</title>
</head>
<div class="container">
    <a class="back-button btn btn-dark" href="home.php">Voltar</a>
    <div class="containerForm">
        <div class="editar-area">
            <h2>Editar usuário</h2>
            <?php

            if (isset($_SESSION['avisoSenha'])) {
                echo $_SESSION['avisoSenha'];
                $_SESSION['avisoSenha'] = "";
            }

            if (isset($_SESSION['tamanhoSenha'])) {
                echo $_SESSION['tamanhoSenha'];
                $_SESSION['tamanhoSenha'] = "";
            }

            if (isset($_SESSION['senhaVazio'])) {
                echo $_SESSION['senhaVazio'];
                $_SESSION['senhaVazio'] = "";
            }
            ?>
            <form method='POST' action='../php/editaruser.php' enctype="multipart/form-data">

                <input type="hidden" name="id" value="<?= $info['id']; ?>">
                <div class="input">
                    <i class="fa fa-user-graduate"></i>
                    <input type="text" name="nome" placeholder="nome completo" value="<?= $info['nome']; ?>">
                </div>

                <div class="input">
                    <i class="fa-regular fa-user"></i>
                    <input type="text" name="user" placeholder="usuário" value="<?= $info['user']; ?>">
                </div>

                <div class="input">
                    <i class="fa-regular fa-envelope"></i>
                    <input type="email" name="email" placeholder="email" value="<?= $info['email']; ?>">
                </div>

                <div class="input">
                    <i class="fa fa-lock"></i>
                    <input type="password" name="password" placeholder="senha">
                </div>

                <div class="input">
                    <i class="fa fa-lock"></i>
                    <input type="password" name="rpassword" placeholder="repita a senha">
                </div>
                <div class="input">
                    <i class="fa-light fa-folder"></i>
                    <input type="file" name="fotouser" />
                </div>
                <!-- onclick="(()=>{ -->
                <!-- if(confirm('Deseja mesmo sair'))location.href='../php/logout.php'; -->
                <!-- })()" -->
                <div class="buttons-area">
                    <input class="buttons-user" type="submit" value="Salvar">
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/magnify/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script src="https://kit.fontawesome.com/9884a810af.js" crossorigin="anonymous"></script>
</body>

</html>