<?php
require('../php/config.php');
require('../php/getusers.php');
require('header.php');

if ($info['admuser'] == 0) {
    header('location: home.php');
}

$info = [];
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if ($id) {
    $sql = $pdo->prepare('SELECT * FROM locais WHERE id = :id');
    $sql->bindValue('id', $id);
    $sql->execute();

    if ($sql->rowCount() > 0) {

        $info = $sql->fetch(PDO::FETCH_ASSOC);
    } else {
        header('Location: painel-locais.php');
        exit;
    }
} else {
    header('Location: painel-locais.php.php');
    exit;
}

?>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="../assets/css/main.css" />

    <script src="https://kit.fontawesome.com/9884a810af.js" crossorigin="anonymous"></script>

    <title>IFC Guide</title>
</head>

<div class="container">
    <a class="back-button btn btn-dark" href="painel-locais.php">Voltar</a>
    <div class="containerForm">
        <div class="editar-area">
            <form method='POST' action='../php/editarlocal.php'>
                <h2>Editar local</h2>
                <input type="hidden" name="id" value="<?= $info['id']; ?>">
                <div class="form-group row">
                    <a>Nome</a>
                    <input class="form-control" type="text" placeholder="Nome do local" value="<?= $info['nome']; ?>" name="nome">
                </div>
                <div class="form-group row">
                    <a>Funções</a>
                    <input class="form-control" type="text" placeholder="Funções do local" value="<?= $info['funcao']; ?>" name="funcao">
                </div>
                <div class="andar-select">
                    <label> Andar atual: <?= $info['idandar']; ?>° andar</label>
                    <select class="form-control select2 select2-hidden-accessible" name="andar">
                        <option value="1">1° andar</option>
                        <option value="2">2° andar</option>
                        <option value="3">3° andar</option>
                    </select>
                </div>
                <div class="bloco-select">
                    <label> Região atual: <?= $info['bloco']; ?> </label>
                    <select class="form-control select2 select2-hidden-accessible" name="bloco" selected="<?= $info['bloco']; ?>">
                        <option value="1° bloco">1° bloco</option>
                        <option value="2° bloco">2° bloco</option>
                        <option value="Vírgula">Virgula</option>
                        <option value="Ambiente externo">Ambiente externo</option>
                    </select>
                </div>
                <div class="form-floating w-100">
                    <a>Descrição</a>
                    <textarea class="form-control" cols=40 rows="7" name="descricao" maxlength="300" wrap="hard" placeholder="Descrição do ambiente (Descrição física, ponto de referência etc..)"><?= $info['descricaofisica']; ?></textarea>
                </div>
                <div class="form-floating w-100">
                    <a>Funcionários</a>
                    <textarea class="form-control" cols=40 rows="3" name="funcionarios" maxlength="300" wrap="hard" placeholder="Funcionários ou professores que frequentam o local"><?= $info['funcionarios']; ?></textarea>
                </div>
                <div class="form-floating w-100">
                    <a>Discentes</a>
                    <textarea class="form-control" cols=40 rows="3" name="alunos" maxlength="300" wrap="hard" placeholder="Discentes que frequentam o local"><?= $info['alunos']; ?></textarea>
                </div>
                <br />
                <div class="buttons-area">
                    <input class="buttons" type="submit" value="Salvar">
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