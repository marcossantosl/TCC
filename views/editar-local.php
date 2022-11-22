<?php
require('../php/config.php');
require('../php/getusers.php');
require('header.php');

if ($info['admuser'] == 0) {
    header('location: home.php');
}
if ($_SESSION['id'] === false) {
    header('Location: ../views/login.php');
    exit;
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
    header('Location: painel-locais.php');
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
    <div class="containerFormMaior">
        <div class="editar-area-especial">
            <form method='POST' action='../php/editarlocal.php'>
                <h2>Editar local</h2>
                <input type="hidden" name="id" value="<?= $info['id']; ?>">
                <div class="input">
                    <i></i>
                    <input type="text" placeholder="Nome do local" value="<?= $info['nome']; ?>" name="nome">
                </div>
                <div class="input">
                    <i></i>
                    <input type="text" placeholder="Funções do local" value="<?= $info['funcao']; ?>" name="funcao">
                </div>
                <div class="select andar-select areas">
                    <label> Andar atual: <?= $info['idandar']; ?>° andar</label>
                    <select class="select form-control select2 select2-hidden-accessible" name="andar">
                        <option value="1">1° andar</option>
                        <option value="2">2° andar</option>
                        <option value="3">3° andar</option>
                    </select>
                </div>
                <div class="bloco-select areas">
                    <label> Região atual: <?= $info['bloco']; ?> </label>
                    <select class="select form-control select2 select2-hidden-accessible" name="bloco" selected="<?= $info['bloco']; ?>">
                        <option value="1° bloco">1° bloco</option>
                        <option value="2° bloco">2° bloco</option>
                        <option value="Vírgula">Virgula</option>
                        <option value="Ambiente externo">Ambiente externo</option>
                    </select>
                </div>
                <label>Descrição física do ambiente (detalhada com orientações em metros)</label>
                <div class="form-floating w-100 areas">
                    <textarea class="form-control" cols=40 rows="8" name="descricao" maxlength="1000" ><?= $info['descricaofisica']; ?></textarea>
                </div>
                <label>Melhor forma de chegar ao local de forma detalhada, utilizando meio de orientação em metros e pontos de referências conhecidos no campus</label>
                <div class="form-floating w-100 areas">
                    <textarea class="form-control" cols=40 rows="8" name="rota" maxlength="1000" wrap="hard" ><?= $info['rota']; ?></textarea>
                </div>
                <label>professores e funcionários que atuam no local</label>
                <div class="form-floating w-100 areas">
                    <textarea class="form-control" cols=40 rows="3" name="funcionarios" maxlength="1000" wrap="hard"><?= $info['funcionarios']; ?></textarea>
                </div>
                <label>Alunos que frequentam o local</label>
                <div class="form-floating w-100 areas">
                    <textarea class="form-control" cols=40 rows="3" name="alunos" maxlength="1000" wrap="hard"><?= $info['alunos']; ?></textarea>
                </div>
                <br />
                <div class="buttons-area">
                    <input class="buttons" type="submit" value="Salvar">
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/main.js"></script>
<script src="https://kit.fontawesome.com/9884a810af.js" crossorigin="anonymous"></script>
</body>

</html>