<?php
require('../php/config.php');
require('../php/getusers.php');
require('header.php');
if ($_SESSION['id'] === false) {
    header('Location: ../views/login.php');
    exit;
}

if (isset($_SESSION['search']) == true) {
    $resultados = $_SESSION['search'];
}

$id = filter_input(INPUT_GET, 'id', FILTER_DEFAULT);
$local = [];

if ($id) {
    $sql = $pdo->prepare("SELECT * FROM locais where idandar = :id");
    $sql->bindValue('id', $id);
    $sql->execute();

    if ($sql->rowCount() > 0) {
        $local = $sql->fetchAll(PDO::FETCH_ASSOC);
    };
};

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/9884a810af.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/main.css" />
    <script src="../js/main.js"></script>

    <title>IFC Guide</title>
</head>

<body>
    <div class="container">
        <div class="geral-locais ">
            <a class="back-button btn btn-dark" href="andares.php">Voltar</a>
            <div class="search-area">
                <form method="POST" action="../php/filtersearch.php" class="form-inline my-2 my-lg-0">
                    <input alt="campo pra inserir pesquisa de local"class="form-control mr-sm-2" name="pesquisar" type="search" placeholder="PESQUISAR" aria-label="Search">
                    <button alt="botão pesquisar local"class="btn btn-outline-success my-2 my-sm-0" type="submit">ENVIAR</button>
                </form>
            </div>
        </div>

        <div class="locais-area">
            <div>
                <?php

                if ($resultados) {
                    
                    foreach ($resultados as $result) : ?>
                        <a class="local-button-locais btn btn-outline-dark btn-lg btn-block" href="local.php?id=<?= $result['id']; ?>"><?= $result['nome'] ?></a>
                    <?php endforeach;
                } else {
                    foreach ($local as $lugar) : ?>
                        <a class="local-button-locais btn btn-outline-dark btn-lg btn-block" href="local.php?id=<?= $lugar['id']; ?>"><?= $lugar['nome'] ?></a>
                <?php endforeach;;
                }
                var_dump($resultados);

                if (isset($_SESSION['search'])) {
                    $_SESSION['search'] = "";
                }
unset($resultados);
                ?>
            </div>
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