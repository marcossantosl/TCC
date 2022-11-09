<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/9884a810af.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/main.css" />

    <title>IFC Guide</title>
</head>

<body>
    <?php
    require('../php/getusers.php');
    require('../php/config.php');
    require('header.php');
    if ($_SESSION['id'] === false) {
        header('Location: ../views/login.php');
        exit;
    }
    ?>
    <!--HEADER-->
    <div class="container">
        <div class="geral">
            <a class="back-button btn btn-dark" href="andares.php">Voltar</a>
        </div>

        <div class="locais-area">
            <div>

                        <a class="local-button-locais btn btn-outline-dark btn-lg btn-block" href="painel-users.php">gerênciar usuários</a>
                        <a class="local-button-locais btn btn-outline-dark btn-lg btn-block" href="painel-adm.php">gerenciar administradores</a>
                        <a class="local-button-locais btn btn-outline-dark btn-lg btn-block" href="painel-locais.php">gerênciar locais</a>
            </div>
        </div>
    </div>
    <!-- //FUNÇOES -->

    <!--JS-->
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