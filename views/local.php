<?php
require('../php/config.php');
require('../php/getusers.php');
require('header.php');
if ($_SESSION['id'] === false) {
    header('Location: ../views/login.php');
    exit;
}

$id = filter_input(INPUT_GET, 'id', FILTER_DEFAULT);
$local = [];

if ($id) {

    $sql = $pdo->prepare("SELECT *, (select andar from andar where id = l.idandar limit 1) as andar FROM locais l WHERE id = :id ORDER BY l.nome ASC ");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if ($sql->rowCount() > 0) {
        $local = $sql->fetch(PDO::FETCH_ASSOC);
    };
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

    <title>IFC Guide</title>
</head>

<body>
    <div class="container">
        <button class="back-button btn btn-dark" onclick="location.href='locais.php?id=<?= $local['idandar'] ?>';">Voltar</button>
        <div class="geral-local">
            <div class="desc-local">
                <div>
                    <h1 class="titulo"><?= $local['nome']; ?></h1>
                    <p class="descricao-local">Localizado no <?= $local['andar']; ?> e no/na <?= $local['bloco']; ?></p>
                    <h3 class="titulo">Como chegar</h3>
                    <p class="descricao-rota"><?= $local['rota']; ?> </p>

                    <h3 class="titulo">Descrição</h3>
                    <p class="descricao"><?= $local['descricaofisica']; ?></p>

                    <h3 class="titulo">Função</h3>
                    <p class="descricao"><?= $local['funcao']; ?></p>


                    <h3 class="titulo">Funcionários e professores que frequentam o local</h3>
                    <p class="descricao"><?= $local['funcionarios']; ?></p>


                    <h3 class="titulo">Alunos que frequentam o local</h3>
                    <p class="descricao"><?= $local['alunos']; ?></p>
                </div>
            </div>

        </div>
    </div>


</body>

</html>