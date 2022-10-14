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
        <div class="containerAcesso">


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
                        <a>Descrição</a>
                        <textarea class="form-control" cols=40 rows="7" name="descricao" maxlength="300" wrap="hard" placeholder="Descrição do ambiente (Descrição física, ponto de referência etc..)"></textarea>
                    </div>
                    <div class="form-floating w-100">
                        <a>Funcionários</a>
                        <textarea class="form-control" cols=40 rows="3" name="funcionarios" maxlength="300" wrap="hard" placeholder="Funcionários ou professores que frequentam o local"></textarea>
                    </div>
                    <div class="form-floating w-100">
                        <a>Discentes</a>
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

    <!-- //CADASTRO -->
</body>

</html>