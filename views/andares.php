<?php
require('../php/config.php');
require('../php/getusers.php');
require('header.php');
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
        <div class="geral">
            <a class="back-button btn btn-dark" href="home.php">Voltar</a>
            <div class="areas">
                <div class="botoes">
                    <?php foreach ($andares as $andar) : ?>
                        <div>
                            <a class="local-button btn btn-success btn-md btn-block" href="locais.php?id=<?= $andar['id']; ?>"><?= $andar['andar'] ?></a>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="video">
                    <h2> Tour geral IFC-CAS </h2>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/3HHmFCB9XVs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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