<?php
require('../php/config.php');
require('../php/getusers.php');
require('header.php');

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
        <a class="back-button btn btn-dark" href="locais.php?id=<?= $local['idandar'] ?>">Voltar</a>

        <h1 class="local-titulo"><?= $local['nome']; ?></h1>
        <p class="regiao">Localizado no <?= $local['andar']; ?> e no/na <?= $local['bloco']; ?></p>

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