<?php
require("../php/getusers.php");
require('header.php');
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
        <a class="back-button btn btn-dark" href="painel-locais.php">Voltar</a>
        <div class="containerForm">

            <form method="POST" action="../php/recebelocal.php">
                <div class="formCad">
                    <h2> Adicione um local </h2>
                    <div class="form-group row">
                        <a>Nome</a>
                        <input class="form-control" type="text" placeholder="Nome do local" name="nome">
                    </div>
                    <div class="form-group row">
                        <a>Funções</a>
                        <input class="form-control" type="text" placeholder="Funções do local" name="funcao">
                    </div>
                    <div class="andar-select">
                        <label> Andar em que o local se encontra </label>
                        <select class="form-control select2 select2-hidden-accessible" name="andar">
                            <option value="1">1° andar</option>
                            <option value="2">2° andar</option>
                            <option value="3">3° andar</option>
                        </select>
                    </div>
                    <div class="bloco-select">
                        <label> Região em que o local se encontra </label>
                        <select class="form-control select2 select2-hidden-accessible" name="bloco">
                            <option value="1° bloco">1° bloco</option>
                            <option value="2° bloco">2° bloco</option>
                            <option value="Vírgula">Virgula</option>
                            <option value="Ambiente externo">Ambiente externo</option>
                        </select>
                    </div>
                    <div class="form-floating w-100">
                        <textarea class="form-control" cols=40 rows="5" name="descricao" maxlength="300" wrap="hard" placeholder="Descrição física do ambiente, de preferência detalhada, como posição das mesas e demais objetos presentes no local"></textarea>
                    </div>
                    <div class="form-floating w-100">
                        <textarea class="form-control" cols=40 rows="5" name="rota" maxlength="300" wrap="hard" placeholder="Modo de chegar, pontos de referências, e distância aproximada em metros e passos"></textarea>
                    </div>
                    <div class="form-floating w-100">
                        <textarea class="form-control" cols=40 rows="3" name="funcionarios" maxlength="300" wrap="hard" placeholder="Funcionários ou professores que frequentam o local"></textarea>
                    </div>
                    <div class="form-floating w-100">
                        <textarea class="form-control" cols=40 rows="3" name="alunos" maxlength="300" wrap="hard" placeholder="Discentes que frequentam o local"></textarea>
                    </div>
                    <br>
                    <div class="button">
                        <input class="buttons" type="submit" value="Cadastrar">
                    </div>
                </div>
            </form>
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