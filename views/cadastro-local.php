<?php
require("../php/getusers.php");
require('header.php');

if ($_SESSION['id'] === false) {
    header('Location: ../views/login.php');
    exit;
}
?>

<!DOCTYPE html>

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
    <div class="container">
        <button class="back-button btn btn-dark" onclick="location.href='painel-locais.php';">Voltar</button>
        <div class="containerFormMaior">
            <div class="editar-area-especial">
                <form method="POST" action="../php/recebelocal.php">
                    <div class="formCad">
                    <p class="session-acesso">
                        <?php

                        if (isset($_SESSION['avisoL'])) {
                            echo $_SESSION['avisoL'];
                            $_SESSION['avisoL'] = '';
                        }
                        if (isset($_SESSION['avisoLocal'])) {
                            echo $_SESSION['avisoLocal'];
                            $_SESSION['avisoLocal'] = '';
                        }
                        ?>
                    </p>
                        <h2> Adicione um local </h2>
                        <div class="input">
                            <i></i>
                            <input type="text" placeholder="Nome do local" name="nome">
                        </div>
                        <div class="input">
                            <i></i>
                            <input type="text" placeholder="Funções do local" name="funcao">
                        </div>
                        <div class="select andar-select areas">
                            <select class="select form-control select2 select2-hidden-accessible" name="andar">
                                <option value="1">1° andar</option>
                                <option value="2">2° andar</option>
                                <option value="3">3° andar</option>
                            </select>
                        </div>
                        <div class="bloco-select areas">
                            <select class="select form-control select2 select2-hidden-accessible" name="bloco">
                                <option value="Primeiro bloco">Primeiro bloco</option>
                                <option value="Segundo bloco">Segundo bloco</option>
                                <option value="Vírgula">Virgula</option>
                                <option value="Ambiente externo">Ambiente externo</option>
                            </select>
                        </div>
                        <label>Descrição física do ambiente (detalhada com orientações em metros)</label>
                        <div class="form-floating w-100 areas">
                            <textarea class="form-control" cols=40 rows="8" name="descricao" maxlength="3000"></textarea>
                        </div>
                        <label>Melhor forma de chegar ao local de forma detalhada, utilizando meio de orientação em metros e pontos de referências conhecidos no campus</label>
                        <div class="form-floating w-100 areas">
                            <textarea class="form-control" cols=40 rows="8" name="rota" maxlength="1500" wrap="hard"></textarea>
                        </div>
                        <label>Professores e funcionários que atuam no local</label>
                        <div class="form-floating w-100 areas">
                            <textarea class="form-control" cols=40 rows="3" name="funcionarios" maxlength="200" wrap="hard"></textarea>
                        </div>
                        <label>Alunos que frequentam o local</label>
                        <div class="form-floating w-100 areas">
                            <textarea class="form-control" cols=40 rows="3" name="alunos" maxlength="200" wrap="hard"></textarea>
                        </div>
                        <br />
                        <div class="button">
                            <input class="buttons" type="submit" value="Cadastrar">
                        </div>
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