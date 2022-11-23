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
    if ($_SESSION['id'] === false) {
        header('Location: ../views/login.php');
        exit;
    }
    ?>
    <!--HEADER-->
    <header>
        <div id="header">
            <div class="container">
                <nav class="navbar navbar-expand-sm navbar-light ">
                    <a href="home.php" alt="página de início" class="navbar-brand" >
                        <img src="../assets/images/logo.svg" class="img-fluid">
                    </a>

                    <button alt="menu" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <!-- verificação de adm -->
                            <?php if ($info['admuser'] == 1) { ?>
                                <li class="nav-item">
                                    <button onclick="location.href='gerenciarpaineis.php';" class="nav-button btn btn-outline-info btn-lg">PAINEL DE ADMINISTRAÇÃO</button>
                                </li>
                            <?php }; ?>
                            <li class="nav-item">
                                <button  onclick="location.href='user.php';" class="nav-button btn btn-outline-info btn-lg">Usuário</button>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
    </header>
    <!--HEADER-->

    <!-- FUNÇÕES -->


    <div class="container">
        <p class="session"> <?php
                            if (isset($_SESSION['updateuser'])) {
                                echo $_SESSION['updateuser'];
                                $_SESSION['updateuser'] = "";
                            }
                            ?> </p>
        <main class="principal-area">
            <div class="locais">
                <img alt="Áreas de locais"class="locaisImg" onclick="window.location.href = 'andares.php'" src="../assets/images/locais.svg">
                <a> Locais </a>
            </div>
        </main>
    </div>
    <!-- //FUNÇOES -->

</body>

</html>